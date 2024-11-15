document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('passwd');
    const confirmPasswordInput = document.getElementById('confirm_passwd');
    
    // Select each password criteria
    const lengthCriteria = document.getElementById('length');
    const numberCriteria = document.getElementById('number');
    const uppercaseCriteria = document.getElementById('uppercase');
    const lowercaseCriteria = document.getElementById('lowercase');
    const specialCriteria = document.getElementById('special');

    // Use correct ID for password matching
    const matchCriteria = document.getElementById('match');

    // Listen for password field entry events
    passwordInput.addEventListener('input', function() {
        const value = passwordInput.value;

        // Check each criterion and change the corresponding class
        // If value.length >= 13 is true: Then the className of lengthCriteria becomes 'green'.
        lengthCriteria.className = value.length >= 13 ? 'green' : 'red';
        numberCriteria.className = /\d/.test(value) ? 'green' : 'red';
        uppercaseCriteria.className = /[A-Z]/.test(value) ? 'green' : 'red';
        lowercaseCriteria.className = /[a-z]/.test(value) ? 'green' : 'red';
        specialCriteria.className = /[?!*$%§@#+]/.test(value) ? 'green' : 'red';

        // Check if passwords match
        if (value === confirmPasswordInput.value && value !== '') {
            matchCriteria.classList.remove('red');
            matchCriteria.classList.add('green');
        } else {
            matchCriteria.classList.remove('green');
            matchCriteria.classList.add('red');
        }
    });

    // Add an input event for the password confirmation field
    confirmPasswordInput.addEventListener('input', function() {
        if (passwordInput.value === confirmPasswordInput.value && confirmPasswordInput.value !== '') {
            matchCriteria.classList.remove('red');
            matchCriteria.classList.add('green');
        } else {
            matchCriteria.classList.remove('green');
            matchCriteria.classList.add('red');
        }
    });
});