const toHtmlStateOption = state => {
    let opt = document.createElement('option')

    opt.label = state.Code
    opt.value = state.Code

    return opt
};
const stateSelect = document.getElementById('inputState')
const addOptions = select => states => stateToOption => states.forEach(state => select.add(stateToOption(state)))

module.exports = states => addOptions(stateSelect)(states)(toHtmlStateOption)