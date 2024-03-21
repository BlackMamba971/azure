<<<<<<< HEAD
<?php

use Model\Conn;

include '../Model/ConnexionBDD.php';
$db = Conn::getInstance();
$sql = "SELECT nom,email,secteuractivite, identreprise FROM Entreprise ORDER BY identreprise DESC LIMIT 5";
$req = $db->prepare($sql);
$req->execute();
$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultat as $entreprise) {
    echo "<li class='main_page'><strong>Nom:</strong> " . $entreprise['nom'] . "<br>";
    echo "<strong>Secteur d'activité:</strong> " . $entreprise['secteuractivite'] . "<br>";
    echo "<strong>Email:</strong> " . $entreprise['email'] . "</li><br>";

}


=======
<?php

use Model\Conn;

include '../Model/ConnexionBDD.php';
$db = Conn::getInstance();
$sql = "SELECT nom,email,secteuractivite, identreprise FROM Entreprise ORDER BY identreprise DESC LIMIT 5";
$req = $db->prepare($sql);
$req->execute();
$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultat as $entreprise) {
    echo "<li class='main_page'><strong>Nom:</strong> " . $entreprise['nom'] . "<br>";
    echo "<strong>Secteur d'activité:</strong> " . $entreprise['secteuractivite'] . "<br>";
    echo "<strong>Email:</strong> " . $entreprise['email'] . "</li><br>";

}


>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
