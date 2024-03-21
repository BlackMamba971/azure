<<<<<<< HEAD
<?php

use Model\Conn;

include '../../Model/ConnexionBDD.php';
include '../../Model/ModelVerifMail.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = Conn::getInstance();

$mail = $_COOKIE["Mail_Etudiant"];
$verif = selectCodeEtuWhereEmail($conn,$mail);

if(isset($_POST["verification"])){
    if (implode($verif)==$_POST["verification"]){
        echo 'yess';
    } else {
        echo "mince";
    }
=======
<?php

use Model\Conn;

include '../../Model/ConnexionBDD.php';
include '../../Model/ModelVerifMail.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = Conn::getInstance();

$mail = $_COOKIE["Mail_Etudiant"];
$verif = selectCodeEtuWhereEmail($conn,$mail);

if(isset($_POST["verification"])){
    if (implode($verif)==$_POST["verification"]){
        echo 'yess';
    } else {
        echo "mince";
    }
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
}