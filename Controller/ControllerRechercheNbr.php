<<<<<<< HEAD
<?php

use Model\Conn;

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

ob_start();

include_once '../Model/ConnexionBDD.php';
include '../Model/ModelRechercheNbr.php';

$conn = Conn::getInstance();

// Vérifier si la connexion à la base de données est réussie
$nbrEtu = selectNbrEtu($conn);
$nbrEntreprise = selectNbrEntreprise($conn);
$nbrPersonnel = selectNbrPersonnel($conn);
$nbrOffre = selectNbrOffre($conn);

=======
<?php

use Model\Conn;

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

ob_start();

include_once '../Model/ConnexionBDD.php';
include '../Model/ModelRechercheNbr.php';

$conn = Conn::getInstance();

// Vérifier si la connexion à la base de données est réussie
$nbrEtu = selectNbrEtu($conn);
$nbrEntreprise = selectNbrEntreprise($conn);
$nbrPersonnel = selectNbrPersonnel($conn);
$nbrOffre = selectNbrOffre($conn);

>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
?>