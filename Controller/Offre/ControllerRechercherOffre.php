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
