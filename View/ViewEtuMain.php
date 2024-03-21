<<<<<<< HEAD
<?php
include "../Controller/ControllerRechercheNbr.php"?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../asserts/css/adminMenu.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/ajoutEtudiant.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/demandeAjoutOffre.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AffichageEtudiant.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AffichageOffre.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AjoutPersonnel.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AffichageEntreprise.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/Cloche.css">
    <link rel="icon" href="../asserts/img/logo.png" type="image/x-icon">

    <script src="../asserts/js/AdminMain.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="../asserts/js/script.js"></script>


</head>
<body class="body">

<header class="header">
    <div class="logo-container">
        <img src="../asserts/img/logo.png" class="logo">
    </div>

</header>



<div class="body-container">

    <div class="rectangle-haut">
        <div class="image-box">
            <img class="banniere" src="../asserts/img/banniere.png" alt="Bannière">
        </div>
        <div class="all-text">
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrEtu">Nombre d'étudiants</h3>
                    <?php
                    if (isset($nbrEtu)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEtu . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrEnt">Nombre d'entreprises</h3>
                    <?php
                    if (isset($nbrEntreprise)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEntreprise . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrOff">Nombre d'offres</h3>
                    <?php
                    if (isset($nbrOffre)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrOffre . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="titreAppli">
            <h3 class="title">Bienvenue sur le Gestionnaire des Apprentis</h3>
        </div>
    </div>


    <footer class="footer" id="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>À propos de nous</h2>
                <p>Le Gestionnaire des Apprentis est une plateforme dédiée à la gestion des étudiants, des offres et des entreprises pour les programmes d'apprentissage.</p>
            </div>

            <div class="footer-section contact">
                <h2>Contactez-nous</h2>
                <p>Email : communication@uphf.fr</p>
                <p> Université Polytechnique Hauts-de-France - Campus Mont Houy - 59313 Valenciennes Cedex 9 | +33 (0)3 27 51 12 34</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 Gestionnaire des Apprentis | Tous droits réservés</p>
        </div>
    </footer>

</div>
</body>


</html>
=======
<?php
include "../Controller/ControllerRechercheNbr.php"?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../asserts/css/adminMenu.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/ajoutEtudiant.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/demandeAjoutOffre.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AffichageEtudiant.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AffichageOffre.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AjoutPersonnel.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AffichageEntreprise.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/Cloche.css">
    <link rel="icon" href="../asserts/img/logo.png" type="image/x-icon">

    <script src="../asserts/js/AdminMain.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="../asserts/js/script.js"></script>


</head>
<body class="body">

<header class="header">
    <div class="logo-container">
        <img src="../asserts/img/logo.png" class="logo">
    </div>

</header>



<div class="body-container">

    <div class="rectangle-haut">
        <div class="image-box">
            <img class="banniere" src="../asserts/img/banniere.png" alt="Bannière">
        </div>
        <div class="all-text">
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrEtu">Nombre d'étudiants</h3>
                    <?php
                    if (isset($nbrEtu)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEtu . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrEnt">Nombre d'entreprises</h3>
                    <?php
                    if (isset($nbrEntreprise)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrEntreprise . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
            <div class="rectangle-info">
                <div class="info-box">
                    <h3 class="nbrOff">Nombre d'offres</h3>
                    <?php
                    if (isset($nbrOffre)) {
                        echo "<h3 class='resNbrEtu'>" . $nbrOffre . "</h3>";
                    } else {
                        echo "<h3 class='nbr'>Erreur: Nombre non défini</h3>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="titreAppli">
            <h3 class="title">Bienvenue sur le Gestionnaire des Apprentis</h3>
        </div>
    </div>


    <footer class="footer" id="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>À propos de nous</h2>
                <p>Le Gestionnaire des Apprentis est une plateforme dédiée à la gestion des étudiants, des offres et des entreprises pour les programmes d'apprentissage.</p>
            </div>

            <div class="footer-section contact">
                <h2>Contactez-nous</h2>
                <p>Email : communication@uphf.fr</p>
                <p> Université Polytechnique Hauts-de-France - Campus Mont Houy - 59313 Valenciennes Cedex 9 | +33 (0)3 27 51 12 34</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 Gestionnaire des Apprentis | Tous droits réservés</p>
        </div>
    </footer>

</div>
</body>


</html>
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
