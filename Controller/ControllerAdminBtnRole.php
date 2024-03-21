<<<<<<< HEAD
<?php
// Controler/ControllerAdminbtnRole.php


include '../Model/ConnexionBDD.php';
include '../Model/ModelAdminBtnRole.php';


if (isset($_POST['role'])) {
    $role = $_POST['role'];
} else {
    echo "Aucun rôle spécifique n'a été spécifié.";
    exit;
}

echo getAdminDataByRoleAndReturnJSON($role);


?>
=======
<?php
// Controler/ControllerAdminbtnRole.php


include '../Model/ConnexionBDD.php';
include '../Model/ModelAdminBtnRole.php';


if (isset($_POST['role'])) {
    $role = $_POST['role'];
} else {
    echo "Aucun rôle spécifique n'a été spécifié.";
    exit;
}

echo getAdminDataByRoleAndReturnJSON($role);


?>
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
