<<<<<<< HEAD
var retourAdminButton = document.getElementById('retour-admin');
if (retourAdminButton) {
    retourAdminButton.addEventListener('click', function () {
        window.location.href = '../View/ViewAdminAdministration.php'; // Remplacez 'AdminMain.php' par l'URL du menu de l'administrateur
    });

    // Affichez le bouton uniquement si l'utilisateur est un administrateur (placez cette logique où cela est approprié)
    var utilisateurEstAdministrateur = true; // Remplacez par votre logique de vérification du rôle
    if (utilisateurEstAdministrateur) {
        var boutonRetourDiv = document.getElementById('bouton-retour-admin');
        boutonRetourDiv.style.display = 'block';
    }
=======
var retourAdminButton = document.getElementById('retour-admin');
if (retourAdminButton) {
    retourAdminButton.addEventListener('click', function () {
        window.location.href = '../View/ViewAdminAdministration.php'; // Remplacez 'AdminMain.php' par l'URL du menu de l'administrateur
    });

    // Affichez le bouton uniquement si l'utilisateur est un administrateur (placez cette logique où cela est approprié)
    var utilisateurEstAdministrateur = true; // Remplacez par votre logique de vérification du rôle
    if (utilisateurEstAdministrateur) {
        var boutonRetourDiv = document.getElementById('bouton-retour-admin');
        boutonRetourDiv.style.display = 'block';
    }
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
}