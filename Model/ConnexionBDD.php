<?php

namespace Model;

use PDO;
use PDOException;

class Conn
{
    private static $instance = null;
    private $connexion;
    private static $host = 'saeserv.postgres.database.azure.com';
    private static $dbname = 'postgres';
    private static $username = 'nwaarr';
    private static $password = 'Kyll!Mario644';

    private function __construct()
    {
        $dsn = "pgsql:host=" . self::$host . ";dbname=" . self::$dbname;

        try {
            $this->connexion = new PDO($dsn, self::$username, self::$password);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
