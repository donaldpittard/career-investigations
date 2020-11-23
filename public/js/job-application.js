/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/data/state-data.js":
/*!*****************************************!*\
  !*** ./resources/js/data/state-data.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var STATES = [{
  "State": "Alabama",
  "Abbrev": "Ala.",
  "Code": "AL"
}, {
  "State": "Alaska",
  "Abbrev": "Alaska",
  "Code": "AK"
}, {
  "State": "Arizona",
  "Abbrev": "Ariz.",
  "Code": "AZ"
}, {
  "State": "Arkansas",
  "Abbrev": "Ark.",
  "Code": "AR"
}, {
  "State": "California",
  "Abbrev": "Calif.",
  "Code": "CA"
}, {
  "State": "Colorado",
  "Abbrev": "Colo.",
  "Code": "CO"
}, {
  "State": "Connecticut",
  "Abbrev": "Conn.",
  "Code": "CT"
}, {
  "State": "Delaware",
  "Abbrev": "Del.",
  "Code": "DE"
}, {
  "State": "District of Columbia",
  "Abbrev": "D.C.",
  "Code": "DC"
}, {
  "State": "Florida",
  "Abbrev": "Fla.",
  "Code": "FL"
}, {
  "State": "Georgia",
  "Abbrev": "Ga.",
  "Code": "GA"
}, {
  "State": "Hawaii",
  "Abbrev": "Hawaii",
  "Code": "HI"
}, {
  "State": "Idaho",
  "Abbrev": "Idaho",
  "Code": "ID"
}, {
  "State": "Illinois",
  "Abbrev": "Ill.",
  "Code": "IL"
}, {
  "State": "Indiana",
  "Abbrev": "Ind.",
  "Code": "IN"
}, {
  "State": "Iowa",
  "Abbrev": "Iowa",
  "Code": "IA"
}, {
  "State": "Kansas",
  "Abbrev": "Kans.",
  "Code": "KS"
}, {
  "State": "Kentucky",
  "Abbrev": "Ky.",
  "Code": "KY"
}, {
  "State": "Louisiana",
  "Abbrev": "La.",
  "Code": "LA"
}, {
  "State": "Maine",
  "Abbrev": "Maine",
  "Code": "ME"
}, {
  "State": "Maryland",
  "Abbrev": "Md.",
  "Code": "MD"
}, {
  "State": "Massachusetts",
  "Abbrev": "Mass.",
  "Code": "MA"
}, {
  "State": "Michigan",
  "Abbrev": "Mich.",
  "Code": "MI"
}, {
  "State": "Minnesota",
  "Abbrev": "Minn.",
  "Code": "MN"
}, {
  "State": "Mississippi",
  "Abbrev": "Miss.",
  "Code": "MS"
}, {
  "State": "Missouri",
  "Abbrev": "Mo.",
  "Code": "MO"
}, {
  "State": "Montana",
  "Abbrev": "Mont.",
  "Code": "MT"
}, {
  "State": "Nebraska",
  "Abbrev": "Nebr.",
  "Code": "NE"
}, {
  "State": "Nevada",
  "Abbrev": "Nev.",
  "Code": "NV"
}, {
  "State": "New Hampshire",
  "Abbrev": "N.H.",
  "Code": "NH"
}, {
  "State": "New Jersey",
  "Abbrev": "N.J.",
  "Code": "NJ"
}, {
  "State": "New Mexico",
  "Abbrev": "N.M.",
  "Code": "NM"
}, {
  "State": "New York",
  "Abbrev": "N.Y.",
  "Code": "NY"
}, {
  "State": "North Carolina",
  "Abbrev": "N.C.",
  "Code": "NC"
}, {
  "State": "North Dakota",
  "Abbrev": "N.D.",
  "Code": "ND"
}, {
  "State": "Ohio",
  "Abbrev": "Ohio",
  "Code": "OH"
}, {
  "State": "Oklahoma",
  "Abbrev": "Okla.",
  "Code": "OK"
}, {
  "State": "Oregon",
  "Abbrev": "Ore.",
  "Code": "OR"
}, {
  "State": "Pennsylvania",
  "Abbrev": "Pa.",
  "Code": "PA"
}, {
  "State": "Rhode Island",
  "Abbrev": "R.I.",
  "Code": "RI"
}, {
  "State": "South Carolina",
  "Abbrev": "S.C.",
  "Code": "SC"
}, {
  "State": "South Dakota",
  "Abbrev": "S.D.",
  "Code": "SD"
}, {
  "State": "Tennessee",
  "Abbrev": "Tenn.",
  "Code": "TN"
}, {
  "State": "Texas",
  "Abbrev": "Tex.",
  "Code": "TX"
}, {
  "State": "Utah",
  "Abbrev": "Utah",
  "Code": "UT"
}, {
  "State": "Vermont",
  "Abbrev": "Vt.",
  "Code": "VT"
}, {
  "State": "Virginia",
  "Abbrev": "Va.",
  "Code": "VA"
}, {
  "State": "Washington",
  "Abbrev": "Wash.",
  "Code": "WA"
}, {
  "State": "West Virginia",
  "Abbrev": "W.Va.",
  "Code": "WV"
}, {
  "State": "Wisconsin",
  "Abbrev": "Wis.",
  "Code": "WI"
}, {
  "State": "Wyoming",
  "Abbrev": "Wyo.",
  "Code": "WY"
}];
module.exports = STATES;

/***/ }),

/***/ "./resources/js/job-application.js":
/*!*****************************************!*\
  !*** ./resources/js/job-application.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var stateData = __webpack_require__(/*! ./data/state-data */ "./resources/js/data/state-data.js");

function toHtmlStateOption(document) {
  return function (state) {
    var opt = document.createElement('option');
    opt.value = state.Code;
    opt.label = state.Code;
    return opt;
  };
}

function addOptionsToSelect(select, options) {
  options.forEach(function (option) {
    return select.add(option);
  });
  return select;
}

function addStateOptions(document, states, select) {
  var stateToOption = toHtmlStateOption(document);
  var stateOptions = states.map(stateToOption);
  return addOptionsToSelect(select, stateOptions);
}

function createSection(sectionName, element) {
  var isCurrent = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
  var isHidden = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : true;

  if (isHidden) {
    hideElement(element);
  }

  return {
    name: sectionName,
    element: element,
    isCurrent: isCurrent,
    isHidden: isHidden
  };
}

function getFormSectionElements(getElement) {
  return {
    contactInformation: getElement('contact-information'),
    generalInformation: getElement('general-information'),
    education: getElement('education'),
    otherSkills: getElement('other-skills'),
    employmentHistory: getElement('employment-history'),
    references: getElement('references')
  };
}

function getJobAppDataPopulator(defaultData) {
  var currentData = defaultData;
  return function (newData) {
    var keys = Object.keys(newData);
    keys.forEach(function (key) {
      switch (key) {
        case 'employmentHistory':
          currentData.employmentHistory = newData.employmentHistory.map(function (x, i) {
            if (currentData.employmentHistory[i]) {
              return _objectSpread(_objectSpread({}, currentData.employmentHistory[i]), x);
            } else {
              return x;
            }
          });
          break;

        case 'references':
          currentData.references = newData.references.map(function (x, i) {
            if (currentData.references[i]) {
              return _objectSpread(_objectSpread({}, currentData.references[i]), x);
            } else {
              return x;
            }
          });
          break;

        default:
          currentData[key] = newData[key];
      }
    });
    console.log(currentData);
    return currentData;
  };
}

function hasClass(className, element) {
  return element.classList.contains(className);
}

function hideSection(section) {
  section.isHidden = true;
  section.isCurrent = false;
  hideElement(section.element);
}

function hideElement(element) {
  if (!hasClass('invisible', element)) {
    element.classList.add('invisible');
  }

  if (!hasClass('d-none', element)) {
    element.classList.add('d-none');
  }

  return element;
}

function hideAllSectionsExcept(formSections, exceptSectionName) {
  var whereNotSectionName = function whereNotSectionName(sectionName) {
    return sectionName != exceptSectionName;
  };

  var hideSection = function hideSection(sectionName) {
    return hideElement(formSections[sectionName]);
  };

  Object.keys(formSections).filter(whereNotSectionName).forEach(hideSection);
}

function showSection(section) {
  section.isHidden = false;
  section.isCurrent = true;
  showElement(section.element);
}

function showElement(element) {
  if (element.classList.contains('invisible')) {
    element.classList.remove('invisible');
  }

  if (element.classList.contains('d-none')) {
    element.classList.remove('d-none');
  }

  return element;
}

function handleNextButtonClick(formSections) {
  return function () {
    var currentSection = formSections.find(function (section) {
      return section.isCurrent;
    });
    var sectionNames = formSections.map(function (section) {
      return section.name;
    });
    var currentSectionIndex = sectionNames.indexOf(currentSection.name);
    var nextSectionIndex = currentSectionIndex + 1;

    if (nextSectionIndex > sectionNames.length) {
      return;
    }

    var nextSection = formSections[nextSectionIndex];

    if (!nextSection) {
      return;
    }

    hideSection(currentSection);
    showSection(nextSection);
  };
}

function handlePreviousButtonClick(formSections) {
  return function () {
    var currentSection = formSections.find(function (section) {
      return section.isCurrent;
    });
    var sectionNames = formSections.map(function (section) {
      return section.name;
    });
    var currentSectionIndex = sectionNames.indexOf(currentSection.name);
    var prevSectionIndex = currentSectionIndex - 1;

    if (prevSectionIndex < 0) {
      return;
    }

    var prevSection = formSections[prevSectionIndex];

    if (!prevSection) {
      return;
    }

    hideSection(currentSection);
    showSection(prevSection);
  };
}

function enableElement(element) {
  element.disabled = false;
  element.classList.remove('disabled');
}

function disableElement(element) {
  element.disabled = true;

  if (element.classList.contains('disabled')) {
    return;
  }

  element.classList.add('disabled');
}

function isValidPhoneNumber(text) {
  var phoneno = /^\(?([0-9]{3})\)?[-]([0-9]{3})[-]([0-9]{4})$/;
  return text.match(phoneno);
}

function isValidEmail(text) {
  if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(text)) {
    return true;
  }

  return false;
}

function isValidZip(text) {
  var zipCodePattern = /^\d{5}$|^\d{5}-\d{4}$/;
  return text.match(zipCodePattern);
}

function validateAndShowOrHide(isValid, element) {
  if (!isValid()) {
    showElement(element);
  } else {
    hideElement(element);
  }
}

function handleContactInfoInputChange(inputName, inputValue, updateState) {
  var obj = {};
  obj[inputName] = inputValue;

  switch (inputName) {
    case 'zip':
      validateAndShowOrHide(function () {
        return isValidZip(inputValue);
      }, document.getElementById('zip-code-warning'));
      break;

    case 'phoneNumber':
      validateAndShowOrHide(function () {
        return isValidPhoneNumber(inputValue);
      }, document.getElementById('phone-number-warning'));
      break;

    case 'email':
      validateAndShowOrHide(function () {
        return isValidEmail(inputValue);
      }, document.getElementById('email-warning'));
      break;
  }

  var updated = updateState(obj);
  var nextButton = document.getElementById('contact-information__btn--next');
  var rulesToShowNextButton = [updated.firstName.length > 0, updated.lastName.length > 0, updated.address.length > 0, updated.city.length > 0, updated.state.length > 0, isValidZip(updated.zip), isValidPhoneNumber(updated.phoneNumber), isValidEmail(updated.email)];
  rulesToShowNextButton.every(function (x) {
    return x;
  }) ? enableElement(nextButton) : disableElement(nextButton);
}

function isValidSalary(salary) {
  return salary > 0;
}

function handleGeneralInformationInputChange(inputName, inputValue, updateState) {
  if (inputName === 'salary') {
    validateAndShowOrHide(function () {
      return isValidSalary(inputValue);
    }, document.getElementById('salary-warning'));
  }

  var actualInputName = inputName;
  var obj = {};

  switch (inputName) {
    case 'heard-about-us-how':
      obj['heardAboutUsHow'] = inputValue;
      break;

    case 'is-eligible-to-work':
      obj['isEligibleToWork'] = inputValue === 'yes' ? true : false;
      break;

    case 'can-start-now':
      obj['canStartNow'] = inputValue === 'yes' ? true : false;
      break;

    case 'date-can-start':
      obj['dateCanStart'] = inputValue;
      break;

    default:
      obj[actualInputName] = inputValue;
  }

  var updated = updateState(obj);
  var nextButton = document.getElementById('general-information__btn--next');
  var showNextButtonRules = [updated.position.length > 0, updated.heardAboutUsHow.length > 0, updated.isEligibleToWork === true || updated.isEligibleToWork === false, isValidSalary(updated.salary), updated.canStartNow === true || updated.canStartNow === false, updated.canStartNow === false ? updated.dateCanStart.length > 0 : updated.canStartNow === true];
  showNextButtonRules.every(function (x) {
    return x;
  }) ? enableElement(nextButton) : disableElement(nextButton);
}

function handleEducationOnChange(inputName, inputValue, updateState) {
  var obj = {};

  switch (inputName) {
    case 'high-school-name':
      obj['highSchoolName'] = inputValue;
      break;

    case 'high-school-diploma':
      obj['highSchoolDiploma'] = inputValue;
      break;

    case 'college-name':
      obj['collegeName'] = inputValue;
      break;

    case 'college-major':
      obj['collegeMajor'] = inputValue;
      break;

    case 'college-degree':
      obj['collegeDegree'] = inputValue;
      break;

    case 'college-years':
      obj['collegeYears'] = inputValue;
      break;

    case 'other-education-name':
      obj['otherEducationName'] = inputValue;
      break;

    case 'other-education-major':
      obj['otherEducationMajor'] = inputValue;
      break;

    case 'other-education-degree':
      obj['otherEducationDegree'] = inputValue;
      break;

    case 'other-education-years':
      obj['otherEducationYears'] = inputValue;
      break;

    default:
      obj[inputName] = inputValue;
  }

  var updated = updateState(obj);
  var nextButton = document.getElementById('education__btn--next');
  var rules = [updated.highSchoolName.length > 0, updated.highSchoolDiploma.length > 0];
  rules.every(function (x) {
    return x;
  }) ? enableElement(nextButton) : disableElement(nextButton);
}

function attachOnChangeHandler(elements, onChangeHandler) {
  for (var i = 0; i < elements.length; i++) {
    elements[i].onchange = onChangeHandler;
  }
}

function handleEmploymentHistoryInputChange(inputName, inputValue, updateState) {
  var obj = {
    employmentHistory: [{}, {}, {}]
  };

  switch (inputName) {
    case 'employment-1-name':
      obj.employmentHistory[0] = {
        name: inputValue
      };
      break;

    case 'employment-1-duties':
      obj.employmentHistory[0] = {
        duties: inputValue
      };
      break;

    case 'employment-1-start':
      obj.employmentHistory[0] = {
        startDate: inputValue
      };
      break;

    case 'employment-1-end':
      obj.employmentHistory[0] = {
        endDate: inputValue
      };
      break;

    case 'employment-1-reason':
      obj.employmentHistory[0] = {
        reason: inputValue
      };
      break;

    case 'employment-2-name':
      obj.employmentHistory[1] = {
        name: inputValue
      };
      break;

    case 'employment-2-duties':
      obj.employmentHistory[1] = {
        duties: inputValue
      };
      break;

    case 'employment-2-start':
      obj.employmentHistory[1] = {
        startDate: inputValue
      };
      break;

    case 'employment-2-end':
      obj.employmentHistory[1] = {
        endDate: inputValue
      };
      break;

    case 'employment-2-reason':
      obj.employmentHistory[1] = {
        reason: inputValue
      };
      break;

    case 'employment-3-name':
      obj.employmentHistory[2] = {
        name: inputValue
      };
      break;

    case 'employment-3-duties':
      obj.employmentHistory[2] = {
        duties: inputValue
      };
      break;

    case 'employment-3-start':
      obj.employmentHistory[2] = {
        startDate: inputValue
      };
      break;

    case 'employment-3-end':
      obj.employmentHistory[2] = {
        endDate: inputValue
      };
      break;

    case 'employment-3-reason':
      obj.employmentHistory[2] = {
        reason: inputValue
      };
      break;
  }

  var updated = updateState(obj);
  var nextButton = document.getElementById('employment-history__btn--next');
  var rules = [updated.employmentHistory[0].name.length > 0, updated.employmentHistory[0].duties.length > 0, updated.employmentHistory[0].startDate.length > 0];
  rules.every(function (x) {
    return x;
  }) ? enableElement(nextButton) : disableElement(nextButton);
}

function handleReferencesInputChange(inputName, inputValue, updateState) {
  var obj = {
    references: [{}, {}, {}]
  };

  switch (inputName) {
    case 'references-1-name':
      obj.references[0] = {
        name: inputValue
      };
      break;

    case 'references-1-relationship':
      obj.references[0] = {
        relationship: inputValue
      };
      break;

    case 'references-1-phone-number':
      obj.references[0] = {
        phoneNumber: inputValue
      };
      validateAndShowOrHide(function () {
        return isValidPhoneNumber(inputValue);
      }, document.getElementById('references-1-phone-number-warning'));
      break;

    case 'references-2-name':
      obj.references[1] = {
        name: inputValue
      };
      break;

    case 'references-2-relationship':
      obj.references[1] = {
        relationship: inputValue
      };
      break;

    case 'references-2-phone-number':
      obj.references[1] = {
        phoneNumber: inputValue
      };
      validateAndShowOrHide(function () {
        return isValidPhoneNumber(inputValue);
      }, document.getElementById('references-2-phone-number-warning'));
      break;

    case 'references-3-name':
      obj.references[2] = {
        name: inputValue
      };
      break;

    case 'references-3-relationship':
      obj.references[2] = {
        relationship: inputValue
      };
      break;

    case 'references-3-phone-number':
      obj.references[2] = {
        phoneNumber: inputValue
      };
      validateAndShowOrHide(function () {
        return isValidPhoneNumber(inputValue);
      }, document.getElementById('references-3-phone-number-warning'));
      break;
  }

  var updated = updateState(obj);

  if (updated.references[0] && updated.references[0].name && updated.references[0].relationship && updated.references[0].phoneNumber) {
    enableElement(document.getElementById('references__btn--submit'));
  }
}

function run(document, stateData) {
  var populateJobAppData = getJobAppDataPopulator({
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
    employmentHistory: [{
      name: '',
      duties: '',
      startDate: '',
      endDate: '',
      reason: ''
    }, {
      name: '',
      duties: '',
      startDate: '',
      endDate: '',
      reason: ''
    }, {
      name: '',
      duties: '',
      startDate: '',
      endDate: '',
      reason: ''
    }],
    references: [{
      name: '',
      relationship: '',
      phoneNumber: ''
    }, {
      name: '',
      relationship: '',
      phoneNumber: ''
    }, {
      name: '',
      relationship: '',
      phoneNumber: ''
    }]
  });
  var formSections = [createSection('contactInformation', document.getElementById('contact-information'), true, false), createSection('generalInformation', document.getElementById('general-information')), createSection('education', document.getElementById('education')), createSection('otherSkills', document.getElementById('other-skills')), createSection('employmentHistory', document.getElementById('employment-history')), createSection('references', document.getElementById('references'))];
  addStateOptions(document, stateData, document.getElementById('state'));
  document.getElementById('contact-information__btn--next').onclick = handleNextButtonClick(formSections);
  document.getElementById('general-information__btn--previous').onclick = handlePreviousButtonClick(formSections);
  document.getElementById('general-information__btn--next').onclick = handleNextButtonClick(formSections);
  document.getElementById('education__btn--previous').onclick = handlePreviousButtonClick(formSections);
  document.getElementById('education__btn--next').onclick = handleNextButtonClick(formSections);
  document.getElementById('other-education__btn--previous').onclick = handlePreviousButtonClick(formSections);
  document.getElementById('other-education__btn--next').onclick = handleNextButtonClick(formSections);
  document.getElementById('employment-history__btn--previous').onclick = handlePreviousButtonClick(formSections);
  document.getElementById('employment-history__btn--next').onclick = handleNextButtonClick(formSections);
  document.getElementById('references__btn--previous').onclick = handlePreviousButtonClick(formSections);
  attachOnChangeHandler(document.getElementsByClassName('contact-information__input'), function (e) {
    return handleContactInfoInputChange(e.target.name, e.target.value, populateJobAppData);
  });
  attachOnChangeHandler(document.getElementsByClassName('general-information__input'), function (e) {
    return handleGeneralInformationInputChange(e.target.name, e.target.value, populateJobAppData);
  });
  attachOnChangeHandler(document.getElementsByClassName('education__input'), function (e) {
    return handleEducationOnChange(e.target.name, e.target.value, populateJobAppData);
  });
  attachOnChangeHandler(document.getElementsByClassName('employment-history__input'), function (e) {
    return handleEmploymentHistoryInputChange(e.target.name, e.target.value, populateJobAppData);
  });
  attachOnChangeHandler(document.getElementsByClassName('references__input'), function (e) {
    return handleReferencesInputChange(e.target.name, e.target.value, populateJobAppData);
  });
}

run(document, stateData);

/***/ }),

/***/ 1:
/*!***********************************************!*\
  !*** multi ./resources/js/job-application.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/allenpittard/code/career-investigations/resources/js/job-application.js */"./resources/js/job-application.js");


/***/ })

/******/ });