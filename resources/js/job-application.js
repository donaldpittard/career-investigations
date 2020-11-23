const stateData = require('./data/state-data');

function toHtmlStateOption(document) {
    return state => {
        let opt = document.createElement('option')

        opt.value = state.Code
        opt.label = state.Code
        
        return opt
    }
}

function addOptionsToSelect(select, options) {
    options.forEach(option => select.add(option));

    return select;
}

function addStateOptions(document, states, select) {
    const stateToOption = toHtmlStateOption(document)
    const stateOptions = states.map(stateToOption)

    return addOptionsToSelect(select, stateOptions)
}
function createSection(sectionName, element, isCurrent = false, isHidden = true) {    
    if (isHidden) {
        hideElement(element)
    }

    return {
        name: sectionName,
        element: element,
        isCurrent: isCurrent,
        isHidden: isHidden
    }
}

function getFormSectionElements(getElement) {
    return {
        contactInformation: getElement('contact-information'),
        generalInformation: getElement('general-information'),
        education: getElement('education'),
        otherSkills: getElement('other-skills'),
        employmentHistory: getElement('employment-history'),
        references: getElement('references'),
    }
}

function getJobAppDataPopulator(defaultData) {
    let currentData = defaultData;

    return newData => {
        const keys = Object.keys(newData)

        keys.forEach(key => {
            switch (key) {
                case 'employmentHistory':
                    currentData.employmentHistory = newData.employmentHistory.map((x, i) => {
                        if (currentData.employmentHistory[i]) {
                            return {...currentData.employmentHistory[i], ...x}
                        } else {
                            return x
                        }
                    })
                    break
                case 'references':
                    currentData.references = newData.references.map((x, i) => {
                        if (currentData.references[i]) {
                            return {...currentData.references[i], ...x}
                        } else {
                            return x
                        }
                    })
                    break
                default:
                    currentData[key] = newData[key]
            }
        })

        console.log(currentData)
        return currentData
    }
}

function hasClass(className, element) {
    return element.classList.contains(className)
}

function hideSection(section) {
    section.isHidden = true
    section.isCurrent = false
    hideElement(section.element)
}

function hideElement(element) {
    if (!hasClass('invisible', element)) {
        element.classList.add('invisible')
    }

    if (!hasClass('d-none', element)) {
        element.classList.add('d-none')
    }

    return element
}

function hideAllSectionsExcept(formSections, exceptSectionName) {
    const whereNotSectionName = sectionName => sectionName != exceptSectionName
    const hideSection = sectionName => hideElement(formSections[sectionName])

    Object.keys(formSections)
        .filter(whereNotSectionName)
        .forEach(hideSection)
}

function showSection(section) {
    section.isHidden = false
    section.isCurrent = true
    showElement(section.element)
}

function showElement(element) {
    if (element.classList.contains('invisible')) {
        element.classList.remove('invisible')
    }

    if (element.classList.contains('d-none')) {
        element.classList.remove('d-none')
    }

    return element
}

function handleNextButtonClick(formSections) {
    return function () {
        const currentSection = formSections.find(section => section.isCurrent)
        const sectionNames = formSections.map(section => section.name)
        const currentSectionIndex = sectionNames.indexOf(currentSection.name)
        const nextSectionIndex = currentSectionIndex + 1

        if (nextSectionIndex > sectionNames.length) {
            return
        }

        const nextSection = formSections[nextSectionIndex]

        if (!nextSection) {
            return
        }

        hideSection(currentSection)
        showSection(nextSection)
    }
}

function handlePreviousButtonClick(formSections) {
    return function () {
        const currentSection = formSections.find(section => section.isCurrent)
        const sectionNames = formSections.map(section => section.name)
        const currentSectionIndex = sectionNames.indexOf(currentSection.name)
        const prevSectionIndex = currentSectionIndex -1

        if (prevSectionIndex < 0) {
            return
        }

        const prevSection = formSections[prevSectionIndex]

        if (!prevSection) {
            return
        }

        hideSection(currentSection)
        showSection(prevSection)
    }
}

function enableElement(element) {
    element.disabled = false
    element.classList.remove('disabled')
}

function disableElement(element) {
    element.disabled = true

    if (element.classList.contains('disabled')) {
        return
    }

    element.classList.add('disabled')
}

function isValidPhoneNumber(text) {
  var phoneno = /^\(?([0-9]{3})\)?[-]([0-9]{3})[-]([0-9]{4})$/
  
  return text.match(phoneno)
}

function isValidEmail(text) {
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(text))
    {
      return (true)
    }
      return (false)
}

function isValidZip(text) {
    let zipCodePattern = /^\d{5}$|^\d{5}-\d{4}$/

    return text.match(zipCodePattern)
}
 
function validateAndShowOrHide(isValid, element) {
    if (!isValid()) {
        showElement(element)
    } else {
        hideElement(element)
    }
}

function handleContactInfoInputChange(inputName, inputValue, updateState) {
    let obj = {}
    obj[inputName] = inputValue
    
    switch (inputName) {
        case 'zip':
            validateAndShowOrHide(
                () => isValidZip(inputValue),
                document.getElementById('zip-code-warning')
            )
            break;
        case 'phoneNumber':
            validateAndShowOrHide(
                () => isValidPhoneNumber(inputValue),
                document.getElementById('phone-number-warning')
            )
            break;
        case 'email':
            validateAndShowOrHide(
                () => isValidEmail(inputValue),
                document.getElementById('email-warning')
            )
            break;
    }

    const updated = updateState(obj)
    const nextButton = document.getElementById('contact-information__btn--next')
    const rulesToShowNextButton = [
        updated.firstName.length > 0,
        updated.lastName.length > 0,
        updated.address.length > 0,
        updated.city.length > 0,
        updated.state.length > 0,
        isValidZip(updated.zip),
        isValidPhoneNumber(updated.phoneNumber),
        isValidEmail(updated.email)
    ]

    rulesToShowNextButton.every(x => x) ? enableElement(nextButton) : disableElement(nextButton)
}

function isValidSalary(salary) {
    return salary > 0
}

function handleGeneralInformationInputChange(inputName, inputValue, updateState) {
    if (inputName === 'salary') {
        validateAndShowOrHide(
            () => isValidSalary(inputValue),
            document.getElementById('salary-warning')
        )
    }

    let actualInputName = inputName
    let obj = {}

    switch (inputName) {
        case 'heard-about-us-how':
            obj['heardAboutUsHow'] = inputValue
            break
        case 'is-eligible-to-work':
            obj['isEligibleToWork'] = inputValue === 'yes' ? true : false
            break
        case 'can-start-now':
            obj['canStartNow'] = inputValue === 'yes' ? true : false
            break
        case 'date-can-start':
            obj['dateCanStart'] = inputValue
            break
        default:
            obj[actualInputName] = inputValue
    }

    const updated = updateState(obj)
    const nextButton = document.getElementById('general-information__btn--next')
    const showNextButtonRules = [
        updated.position.length > 0,
        updated.heardAboutUsHow.length > 0,
        updated.isEligibleToWork === true || updated.isEligibleToWork === false,
        isValidSalary(updated.salary),
        updated.canStartNow === true || updated.canStartNow === false,
        updated.canStartNow === false ? updated.dateCanStart.length > 0 : updated.canStartNow === true
    ]

    showNextButtonRules.every(x => x) ? enableElement(nextButton) : disableElement(nextButton)
}

function handleEducationOnChange(inputName, inputValue, updateState) {
    let obj = {}
    
    switch (inputName) {
        case 'high-school-name':
            obj['highSchoolName'] = inputValue
            break
        case 'high-school-diploma':
            obj['highSchoolDiploma'] = inputValue
            break
        case 'college-name':
            obj['collegeName'] = inputValue
            break
        case 'college-major':
            obj['collegeMajor'] = inputValue
            break
        case 'college-degree':
            obj['collegeDegree'] = inputValue
            break
        case 'college-years':
            obj['collegeYears'] = inputValue
            break
        case 'other-education-name':
            obj['otherEducationName'] = inputValue
            break
        case 'other-education-major':
            obj['otherEducationMajor'] = inputValue
            break
        case 'other-education-degree':
            obj['otherEducationDegree'] = inputValue
            break
        case 'other-education-years':
            obj['otherEducationYears'] = inputValue
            break
        default:
            obj[inputName] = inputValue       
    }

    const updated = updateState(obj)
    const nextButton = document.getElementById('education__btn--next')
    const rules = [
        updated.highSchoolName.length > 0,
        updated.highSchoolDiploma.length > 0
    ]

    rules.every(x => x) ? enableElement(nextButton) : disableElement(nextButton)
}

function attachOnChangeHandler(elements, onChangeHandler) {
    for (let i = 0; i < elements.length; i++) {
        elements[i].onchange = onChangeHandler
    }
}

function handleEmploymentHistoryInputChange(inputName, inputValue, updateState) {
    let obj = {employmentHistory: [
        {},
        {},
        {}
    ]}
    
    switch(inputName) {
        case 'employment-1-name':
            obj.employmentHistory[0] = {name: inputValue}
            break
        case 'employment-1-duties':
            obj.employmentHistory[0] = {duties: inputValue}
            break
        case 'employment-1-start':
            obj.employmentHistory[0] = {startDate: inputValue}
            break
        case 'employment-1-end':
            obj.employmentHistory[0] = {endDate: inputValue}
            break
        case 'employment-1-reason':
            obj.employmentHistory[0] = {reason: inputValue}
            break
        case 'employment-2-name':
            obj.employmentHistory[1] = {name: inputValue}
            break
        case 'employment-2-duties':
            obj.employmentHistory[1] = {duties: inputValue}
            break
        case 'employment-2-start':
            obj.employmentHistory[1] = {startDate: inputValue}
            break
        case 'employment-2-end':
            obj.employmentHistory[1] = {endDate: inputValue}
            break
        case 'employment-2-reason':
            obj.employmentHistory[1] = {reason: inputValue}
            break
        case 'employment-3-name':
            obj.employmentHistory[2] = {name: inputValue}
            break
        case 'employment-3-duties':
            obj.employmentHistory[2] = {duties: inputValue}
            break
        case 'employment-3-start':
            obj.employmentHistory[2] = {startDate: inputValue}
            break
        case 'employment-3-end':
            obj.employmentHistory[2] = {endDate: inputValue}
            break
        case 'employment-3-reason':
            obj.employmentHistory[2] = {reason: inputValue}
            break
    }

    const updated = updateState(obj)
    const nextButton = document.getElementById('employment-history__btn--next')
    const rules = [
        updated.employmentHistory[0].name.length > 0,
        updated.employmentHistory[0].duties.length > 0,
        updated.employmentHistory[0].startDate.length > 0
    ]
    rules.every(x => x) ? enableElement(nextButton) : disableElement(nextButton)
}

function handleReferencesInputChange(inputName, inputValue, updateState) {
    let obj = {
        references: [
            {},
            {},
            {}
        ]
    }

    switch (inputName) {
        case 'references-1-name':
            obj.references[0] = {name: inputValue}
            break
        case 'references-1-relationship':
            obj.references[0] = {relationship: inputValue}
            break
        case 'references-1-phone-number':
            obj.references[0] = {phoneNumber: inputValue}
            validateAndShowOrHide(
                () => isValidPhoneNumber(inputValue),
                document.getElementById('references-1-phone-number-warning')
            )
            break
        case 'references-2-name':
            obj.references[1] = {name: inputValue}
            break
        case 'references-2-relationship':
            obj.references[1] = {relationship: inputValue}
            break
        case 'references-2-phone-number':
            obj.references[1] = {phoneNumber: inputValue}

            validateAndShowOrHide(
                () => isValidPhoneNumber(inputValue),
                document.getElementById('references-2-phone-number-warning')
            )
            break
        case 'references-3-name':
            obj.references[2] = {name: inputValue}
            break
        case 'references-3-relationship':
            obj.references[2] = {relationship: inputValue}
            break
        case 'references-3-phone-number':
            obj.references[2] = {phoneNumber: inputValue}
            
            validateAndShowOrHide(
                () => isValidPhoneNumber(inputValue),
                document.getElementById('references-3-phone-number-warning')
            )
            break
    }

    const updated = updateState(obj)


}

function run(document, stateData) {
    const populateJobAppData = getJobAppDataPopulator(
        {
            firstName: '',
            lastName: '',
            address: '',
            address2: '',
            city: '',
            state: '',
            zip: '',
            phoneNumber: '',
            email: '',
            position: '',
            heardAboutUsHow: '',
            isEligibleToWork: null,
            salary: 0.00,
            canStartNow: null,
            dateCanStart: '',
            highSchoolName: '',
            highSchoolDiploma: '',
            collegeName: '',
            collegeMajor: '',
            collegeDegree: '',
            collegeYearsAttended: 0,
            otherEducationName: '',
            otherEducationMajor: '',
            otherEducationDegree: '',
            otherEducationYearsAttended: '',
            otherSkills: '',
            employmentHistory: [
                {
                    name: '',
                    duties: '',
                    startDate: '',
                    endDate: '',
                    reason: ''
                },
                {
                    name: '',
                    duties: '',
                    startDate: '',
                    endDate: '',
                    reason: ''
                },
                {
                    name: '',
                    duties: '',
                    startDate: '',
                    endDate: '',
                    reason: ''
                }
            ],
            references: [
                {
                    name: '',
                    relationship: '',
                    phoneNumber: ''
                },
                {
                    name: '',
                    relationship: '',
                    phoneNumber: ''
                },
                {
                    name: '',
                    relationship: '',
                    phoneNumber: ''
                }
            ]
        }
    )

    const formSections = [
        createSection('contactInformation', document.getElementById('contact-information'), true, false),
        createSection('generalInformation', document.getElementById('general-information')),
        createSection('education', document.getElementById('education')),
        createSection('otherSkills', document.getElementById('other-skills')),
        createSection('employmentHistory', document.getElementById('employment-history')),
        createSection('references', document.getElementById('references'))
    ]

    addStateOptions(document, stateData, document.getElementById('state'))

    document.getElementById('contact-information__btn--next').onclick = handleNextButtonClick(formSections)
    document.getElementById('general-information__btn--previous').onclick = handlePreviousButtonClick(formSections)
    document.getElementById('general-information__btn--next').onclick = handleNextButtonClick(formSections)
    document.getElementById('education__btn--previous').onclick = handlePreviousButtonClick(formSections)
    document.getElementById('education__btn--next').onclick = handleNextButtonClick(formSections)
    document.getElementById('other-education__btn--previous').onclick = handlePreviousButtonClick(formSections)
    document.getElementById('other-education__btn--next').onclick = handleNextButtonClick(formSections)
    document.getElementById('employment-history__btn--previous').onclick = handlePreviousButtonClick(formSections)
    document.getElementById('employment-history__btn--next').onclick = handleNextButtonClick(formSections)
    document.getElementById('references__btn--previous').onclick = handlePreviousButtonClick(formSections)
    
    attachOnChangeHandler(
        document.getElementsByClassName('contact-information__input'),
        e => handleContactInfoInputChange(e.target.name, e.target.value, populateJobAppData)
    )

    attachOnChangeHandler(
        document.getElementsByClassName('general-information__input'), 
        e => handleGeneralInformationInputChange(e.target.name, e.target.value, populateJobAppData)
    )

    attachOnChangeHandler(
        document.getElementsByClassName('education__input'),
        e => handleEducationOnChange(e.target.name, e.target.value, populateJobAppData)
    )

    attachOnChangeHandler(
        document.getElementsByClassName('employment-history__input'),
        e => handleEmploymentHistoryInputChange(e.target.name, e.target.value, populateJobAppData)
    )

    attachOnChangeHandler(
        document.getElementsByClassName('references__input'),
        e => handleReferencesInputChange(e.target.name, e.target.value, populateJobAppData)
    )
}

run(document, stateData)