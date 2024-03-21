<?php

namespace Model;

use PDO;
use PDOException;


class Conn
{
    private static $instance = null;
    private $connexion;
    private static $host = 'gestionnaire-des-apprentis.database.windows.net';
    private static $dbname = 'gestionnaire-des-apprentis.azurewebsites.net';
    private static $username = 'YcK7896aGsSgk2';
    private static $password = 'aScG7Y698s2kgK';

    private function __construct()
    {
        $dsn = "pgsql:host=" . self::$host . ";port=1433;dbname=" . self::$dbname . ";user=" . self::$username . ";password=" . self::$password;

        try {
            $this->connexion = new PDO($dsn);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->connexion;
    }
}

?>
