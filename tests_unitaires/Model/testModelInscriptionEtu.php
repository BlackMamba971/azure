<<<<<<< HEAD
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelInscriptionEtu.php";

use PHPUnit\Framework\TestCase;

class testModelInscriptionEtu extends TestCase
{
    function testGenerationToken()
    {
        $result = generationToken();
        self::assertIsString($result);
    }
}
=======
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelInscriptionEtu.php";

use PHPUnit\Framework\TestCase;

class testModelInscriptionEtu extends TestCase
{
    function testGenerationToken()
    {
        $result = generationToken();
        self::assertIsString($result);
    }
}
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
