<<<<<<< HEAD
<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['deco'])){

    // Détruire la session
    session_unset();
    session_destroy();

    header('Location: ../../View/ViewAvConnexion.html');
    exit;

}

if (isset($_POST['compte'])){

    header('Location: ../Personnel/ControllerModifierProfilPerso.php');
    exit;

}

ob_end_flush();
=======
<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['deco'])){

    // Détruire la session
    session_unset();
    session_destroy();

    header('Location: ../../View/ViewAvConnexion.html');
    exit;

}

if (isset($_POST['compte'])){

    header('Location: ../Personnel/ControllerModifierProfilPerso.php');
    exit;

}

ob_end_flush();
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
