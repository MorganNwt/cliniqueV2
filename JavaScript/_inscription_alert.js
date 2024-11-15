document.addEventListener("DOMContentLoaded", function() {
    var alertDiv = document.createElement("div");
    alertDiv.className = "alert-banner"; 
    alertDiv.innerHTML = `<p>Le mot de passe doit contenir au moins 13 caractères, dont au moins une majuscule,
                              une minuscule, un chiffre et un caractère spécial.</p>
                              <button id="returnButton">Retour au formulaire</button>`;

    document.body.appendChild(alertDiv);

    // Add event listener for button
    document.getElementById("returnButton").addEventListener("click", function() {
    
        // Redirect to form
        window.location.href = "inscription.php"; 
    });
});