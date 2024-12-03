
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('passwd');
    const confirmPasswordInput = document.getElementById('confirm_passwd'); // Ajouter cette ligne

    // Sélectionner chaque critère de mot de passe
    const lengthCriteria = document.getElementById('length');
    const numberCriteria = document.getElementById('number');
    const uppercaseCriteria = document.getElementById('uppercase');
    const lowercaseCriteria = document.getElementById('lowercase');
    const specialCriteria = document.getElementById('special');
    const matchCriteria = document.getElementById('match');

    // Vérification du mot de passe
    passwordInput.addEventListener('input', function() {
        const value = passwordInput.value;

        // Vérifier chaque critère de mot de passe et changer la classe en conséquence
        lengthCriteria.className = value.length >= 13 ? 'green' : 'red';
        numberCriteria.className = /\d/.test(value) ? 'green' : 'red';
        uppercaseCriteria.className = /[A-Z]/.test(value) ? 'green' : 'red';
        lowercaseCriteria.className = /[a-z]/.test(value) ? 'green' : 'red';
        specialCriteria.className = /[?!*$%§@#+]/.test(value) ? 'green' : 'red';

        // Vérifier si le mot de passe correspond à la confirmation
        if (value === confirmPasswordInput.value && value !== '') {
            matchCriteria.classList.remove('red');
            matchCriteria.classList.add('green');
        } else {
            matchCriteria.classList.remove('green');
            matchCriteria.classList.add('red');
        }
    });

    // Vérification de la confirmation du mot de passe
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