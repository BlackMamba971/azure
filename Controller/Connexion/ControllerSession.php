<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!isset($_SESSION['admin'])){
    echo $_SESSION['admin'];
    //header('location: ../choix.php');
    }