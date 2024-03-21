<<<<<<< HEAD
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelConnexionEtu.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelConnexionEtu extends TestCase
{
    function testselectEmailMDPEtu()
    {
        $result = selectEmailMDPRoleAdmin(Conn::getInstance());
        self::assertIsArray($result);
    }
}
=======
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelConnexionEtu.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelConnexionEtu extends TestCase
{
    function testselectEmailMDPEtu()
    {
        $result = selectEmailMDPRoleAdmin(Conn::getInstance());
        self::assertIsArray($result);
    }
}
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
