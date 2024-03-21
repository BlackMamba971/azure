<<<<<<< HEAD
function ValidationMdp() {
    var mdp = document.getElementById('mdp').value;
    var mdpConfirm = document.getElementById('mdpVerif').value;
    var errorElement = document.getElementById('error_message');

    if (mdp !== mdpConfirm) {
        errorElement.textContent = "Les mots de passe ne correspondent pas.";
        return false;
    } else {
        errorElement.textContent = "";
        return true;
    }
=======
function ValidationMdp() {
    var mdp = document.getElementById('mdp').value;
    var mdpConfirm = document.getElementById('mdpVerif').value;
    var errorElement = document.getElementById('error_message');

    if (mdp !== mdpConfirm) {
        errorElement.textContent = "Les mots de passe ne correspondent pas.";
        return false;
    } else {
        errorElement.textContent = "";
        return true;
    }
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
}