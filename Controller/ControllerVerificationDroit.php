<<<<<<< HEAD
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['administration'])) {
    header('location: ../View/ViewConnexion.html');
}
=======
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['administration'])) {
    header('location: ../View/ViewConnexion.html');
}
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
