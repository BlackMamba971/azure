<<<<<<< HEAD
function etu() {
    $.ajax({
        url: '../Model/ModelAfficherPlusEtu.php',
        type: 'GET',
        dataType: 'html',
        data: {
            page: 1
        },
        success: function (result) {
            // Met à jour le contenu du conteneur des entreprises
            $('#etudiants-container').html(result);

        },
        error: function (error) {
            console.error('Erreur lors du chargement des entreprises :', error);
        }
    });
}


document.addEventListener('DOMContentLoaded', function () {
    etu(); // Appeler la fonction pour charger les offres au chargement de la page
});

=======
function etu() {
    $.ajax({
        url: '../Model/ModelAfficherPlusEtu.php',
        type: 'GET',
        dataType: 'html',
        data: {
            page: 1
        },
        success: function (result) {
            // Met à jour le contenu du conteneur des entreprises
            $('#etudiants-container').html(result);

        },
        error: function (error) {
            console.error('Erreur lors du chargement des entreprises :', error);
        }
    });
}


document.addEventListener('DOMContentLoaded', function () {
    etu(); // Appeler la fonction pour charger les offres au chargement de la page
});

>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
