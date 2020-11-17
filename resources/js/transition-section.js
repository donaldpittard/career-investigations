const transitionToGeneral = () => {
    console.log('Transition to general')
    
    // Validate contact information

    // Hide Contact Fields
    document.getElementById('contact').classList.add('d-none');

    // Show General Fields
    document.getElementById('general').classList.remove('d-none')
};

module.exports = sectionName => () => {
    switch (sectionName) {
        case 'contact':
            return
        case 'general':
            return transitionToGeneral()
        case '':
            return
        default:
            return
    }
};