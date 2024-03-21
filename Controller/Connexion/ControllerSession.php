<<<<<<< HEAD
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!isset($_SESSION['admin'])){
    echo $_SESSION['admin'];
    //header('location: ../choix.php');
=======
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!isset($_SESSION['admin'])){
    echo $_SESSION['admin'];
    //header('location: ../choix.php');
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
    }