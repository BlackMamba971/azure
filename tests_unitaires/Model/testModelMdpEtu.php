<<<<<<< HEAD
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelMdpEtu.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelMdpEtu extends TestCase
{
    function testRecuptoken()
    {
        $result = recuptoken(
            Conn::getInstance(),
            "test@gmail.com"
        );
        self::assertIsString($result);
    }
}
=======
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelMdpEtu.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelMdpEtu extends TestCase
{
    function testRecuptoken()
    {
        $result = recuptoken(
            Conn::getInstance(),
            "test@gmail.com"
        );
        self::assertIsString($result);
    }
}
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
