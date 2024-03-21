<<<<<<< HEAD
<?php

use Model\Conn;

include '../../Model/ConnexionBDD.php';
include '../../Model/ModelFiltres.php';

$conn = Conn::getInstance();

$nom = $_GET['nom'] ?? '';
$ville = $_GET['ville'] ?? '';
$codepostal = $_GET['codepostal'] ?? '';
$secteurActivite = $_GET['secteurActivite'] ?? '';
$adresse = $_GET['adresse'] ?? '';
$email = $_GET['email'] ?? '';
$numtel = $_GET['numtel'] ?? '';

FiltrerEntreprises($conn,$nom,$ville,$codepostal,$secteurActivite,$adresse,$email,$numtel);

=======
<?php

use Model\Conn;

include '../../Model/ConnexionBDD.php';
include '../../Model/ModelFiltres.php';

$conn = Conn::getInstance();

$nom = $_GET['nom'] ?? '';
$ville = $_GET['ville'] ?? '';
$codepostal = $_GET['codepostal'] ?? '';
$secteurActivite = $_GET['secteurActivite'] ?? '';
$adresse = $_GET['adresse'] ?? '';
$email = $_GET['email'] ?? '';
$numtel = $_GET['numtel'] ?? '';

FiltrerEntreprises($conn,$nom,$ville,$codepostal,$secteurActivite,$adresse,$email,$numtel);

>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
