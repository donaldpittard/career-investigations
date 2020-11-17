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

function run(document, stateData) {
    addStateOptions(
        document,
        stateData,
        document.getElementById('state')
    )
}

run(document, stateData)