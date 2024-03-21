<<<<<<< HEAD
<?php

use Model\Conn;

include '../Model/ConnexionBDD.php';
$db = Conn::getInstance();
$sql = "SELECT idetudiant, nom, prenom,ine,formation FROM Etudiant ORDER BY idetudiant DESC LIMIT 4";
$req = $db->prepare($sql);
$req->execute();  // Correction : Utilisation de $req au lieu de $sql
$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultat as $etudiant) {
    echo "<li><strong>Nom:</strong> " . $etudiant['nom'] . "<br>";
    echo "<strong>Prénom:</strong> " . $etudiant['prenom'] . "<br>";
    echo "<strong>INE:</strong> " . $etudiant['ine'] . "<br>";
    echo "<strong>Formation:</strong> " . $etudiant['formation'] . "</li><br>";
}


=======
<?php

use Model\Conn;

include '../Model/ConnexionBDD.php';
$db = Conn::getInstance();
$sql = "SELECT idetudiant, nom, prenom,ine,formation FROM Etudiant ORDER BY idetudiant DESC LIMIT 4";
$req = $db->prepare($sql);
$req->execute();  // Correction : Utilisation de $req au lieu de $sql
$resultat = $req->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultat as $etudiant) {
    echo "<li><strong>Nom:</strong> " . $etudiant['nom'] . "<br>";
    echo "<strong>Prénom:</strong> " . $etudiant['prenom'] . "<br>";
    echo "<strong>INE:</strong> " . $etudiant['ine'] . "<br>";
    echo "<strong>Formation:</strong> " . $etudiant['formation'] . "</li><br>";
}


>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
