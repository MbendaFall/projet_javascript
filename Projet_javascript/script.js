function validateForm(event) {
    event.preventDefault(); // Prevent form submission
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    if (username === '' || password === '') {
        displayError("Tous les champs sont obligatoires.");
    } else {
        // Vérification des informations dans la base de données (simulée ici)
        var isAdmin = username === 'admin' && password === 'admin123'; 
        // Supposons que 'admin' soit un utilisateur administrateur

        if (isAdmin) {
            // Redirection vers l'espace administrateur
            window.location.href = 'admin.html';
        } else {
            // Redirection vers l'espace joueur
            window.location.href = 'joueur.html';
        }
    }
}

function displayError(message) {
    var errorDiv = document.getElementById('errorMessages');
    errorDiv.innerHTML = message;
}

