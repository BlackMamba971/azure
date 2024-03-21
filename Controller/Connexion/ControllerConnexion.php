<<<<<<< HEAD
<?php

use Model\Conn;

include('../../Model/ModelConnexion.php');
include('../../Model/ConnexionBDD.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$essaiMaximal = 1;

$conn = Conn::getInstance();

if (!isset($_SESSION['essai'])) {
    $_SESSION['essai'] = 0;
}

$essaiMaximal = 99999;

attente($essaiMaximal);

// Supprimer les balises HTML et PHP des données postées
$email = htmlspecialchars($_POST['Email'], ENT_QUOTES, 'UTF-8');
$motDePasse = htmlspecialchars($_POST['MotDePasse'], ENT_QUOTES, 'UTF-8');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$users = selectEmailMDPEtu($conn,$email);
    if ($users) {
        if (authenticatedEtu($users, $email, $motDePasse)) {
            $_SESSION['etu'] = true;
            $_SESSION['email'] = $users['email'];
            header("location: ../../View/ViewEtuMain.php");
            exit;
        }
        else {
            $_SESSION['essai']++;
            header('location: ../../View/ViewConnexion.html?error=1');
            exit;
        }
    }

    $users = selectEmailMDPRoleAdmin($conn, $email);
    if ($users) {
        if (authenticatedAdmin($users, $email, $motDePasse)) {
            $_SESSION['administration'] = true;
            $_SESSION['formation'] = selectFormationAdmin($conn, $users['email']);
            $_SESSION['email'] = $users['email'];
            role($users);
        } else {
            $_SESSION['essai']++;
            $_SESSION['error_message'] = "Adresse e-mail ou mot de passe incorrect.";
            header('location: ../../View/ViewConnexion.html?error=1');
            exit;
        }
    }
    else {
        $_SESSION['essai']++;
        header('location: ../../View/ViewConnexion.html?error=1');
        exit;
    }
=======
<?php

use Model\Conn;

include('../../Model/ModelConnexion.php');
include('../../Model/ConnexionBDD.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$essaiMaximal = 1;

$conn = Conn::getInstance();

if (!isset($_SESSION['essai'])) {
    $_SESSION['essai'] = 0;
}

$essaiMaximal = 99999;

attente($essaiMaximal);

// Supprimer les balises HTML et PHP des données postées
$email = htmlspecialchars($_POST['Email'], ENT_QUOTES, 'UTF-8');
$motDePasse = htmlspecialchars($_POST['MotDePasse'], ENT_QUOTES, 'UTF-8');

error_reporting(E_ALL);
ini_set('display_errors', 1);

$users = selectEmailMDPEtu($conn,$email);
    if ($users) {
        if (authenticatedEtu($users, $email, $motDePasse)) {
            $_SESSION['etu'] = true;
            $_SESSION['email'] = $users['email'];
            header("location: ../../View/ViewEtuMain.php");
            exit;
        }
        else {
            $_SESSION['essai']++;
            header('location: ../../View/ViewConnexion.html?error=1');
            exit;
        }
    }

    $users = selectEmailMDPRoleAdmin($conn, $email);
    if ($users) {
        if (authenticatedAdmin($users, $email, $motDePasse)) {
            $_SESSION['administration'] = true;
            $_SESSION['formation'] = selectFormationAdmin($conn, $users['email']);
            $_SESSION['email'] = $users['email'];
            role($users);
        } else {
            $_SESSION['essai']++;
            $_SESSION['error_message'] = "Adresse e-mail ou mot de passe incorrect.";
            header('location: ../../View/ViewConnexion.html?error=1');
            exit;
        }
    }
    else {
        $_SESSION['essai']++;
        header('location: ../../View/ViewConnexion.html?error=1');
        exit;
    }
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
