<<<<<<< HEAD
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelConnexion.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelConnexion extends TestCase
{
    function testselectEmailMDPRoleAdmin()
    {
        $result = selectEmailMDPRoleAdmin(Conn::getInstance(), "test@gmail.com");
        self::assertIsArray($result);
    }
}
=======
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelConnexion.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelConnexion extends TestCase
{
    function testselectEmailMDPRoleAdmin()
    {
        $result = selectEmailMDPRoleAdmin(Conn::getInstance(), "test@gmail.com");
        self::assertIsArray($result);
    }
}
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
