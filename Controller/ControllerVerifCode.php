<<<<<<< HEAD
<?php
session_start();
use Model\Conn;

include '../Model/ConnexionBDD.php';
include '../Model/ModelReinitialiserMdp.php';
include '../Model/ModelMail.php';
include '../Model/ModelInscriptionEtu.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = Conn::GetInstance();

$errors = [];



if (isset($_POST['code']) ) {
    if ($_POST['code'] ==  $_SESSION['code']){
        header('location: ../View/ViewOubliMotDePasseCode.php');
    } ;
} else {
    echo json_encode($_SESSION['code']);
}







?>
=======
<?php
session_start();
use Model\Conn;

include '../Model/ConnexionBDD.php';
include '../Model/ModelReinitialiserMdp.php';
include '../Model/ModelMail.php';
include '../Model/ModelInscriptionEtu.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = Conn::GetInstance();

$errors = [];



if (isset($_POST['code']) ) {
    if ($_POST['code'] ==  $_SESSION['code']){
        header('location: ../View/ViewOubliMotDePasseCode.php');
    } ;
} else {
    echo json_encode($_SESSION['code']);
}







?>
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3