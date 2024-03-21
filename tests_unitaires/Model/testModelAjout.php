<<<<<<< HEAD
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelAjout.php ";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelAjout extends TestCase
{
    function testAjoutAdministration()
    {
        $result = ajoutAdministration(
            Conn::getInstance(),
            "testNom",
            "testPrenom",
            "testFormation",
            "test@gmail.com",
            "testMotdepasse",
            "testRole"
        );
        self::assertIsArray($result);
    }

    function testSelectEtuWhereEmail()
    {
        $result = selectEtuWhereEmail(Conn::getInstance(), "test@gmail.com");
        self::assertIsArray($result);
    }
}
=======
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelAjout.php ";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelAjout extends TestCase
{
    function testAjoutAdministration()
    {
        $result = ajoutAdministration(
            Conn::getInstance(),
            "testNom",
            "testPrenom",
            "testFormation",
            "test@gmail.com",
            "testMotdepasse",
            "testRole"
        );
        self::assertIsArray($result);
    }

    function testSelectEtuWhereEmail()
    {
        $result = selectEtuWhereEmail(Conn::getInstance(), "test@gmail.com");
        self::assertIsArray($result);
    }
}
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
