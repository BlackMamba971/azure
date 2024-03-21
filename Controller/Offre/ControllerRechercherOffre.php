<<<<<<< HEAD
<?php

use Model\Conn;

include '../../Model/ConnexionBDD.php';
include '../../Model/ModelFiltres.php';

$conn = Conn::getInstance();

$nom = $_GET['nom'] ?? '';
$domaine = $_GET['domaine'] ?? '';
$mission = $_GET['mission'] ?? '';
$nbEtudiant = $_GET['nbEtudiant'] ?? '';
$parcours = $_GET['parcours'] ?? '';

FiltrerOffres($conn,$nom,$domaine,$mission,$nbEtudiant,$parcours);
=======
<?php

use Model\Conn;

include '../../Model/ConnexionBDD.php';
include '../../Model/ModelFiltres.php';

$conn = Conn::getInstance();

$nom = $_GET['nom'] ?? '';
$domaine = $_GET['domaine'] ?? '';
$mission = $_GET['mission'] ?? '';
$nbEtudiant = $_GET['nbEtudiant'] ?? '';
$parcours = $_GET['parcours'] ?? '';

FiltrerOffres($conn,$nom,$domaine,$mission,$nbEtudiant,$parcours);
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
