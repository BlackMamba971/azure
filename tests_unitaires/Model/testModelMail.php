<<<<<<< HEAD
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelMail.php";

use PHPUnit\Framework\TestCase;

class testModelMail extends TestCase
{
    function testEnvoieMail()
    {
        $result = envoieMail();
        self::assertIsBool($result);
    }
}
=======
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelMail.php";

use PHPUnit\Framework\TestCase;

class testModelMail extends TestCase
{
    function testEnvoieMail()
    {
        $result = envoieMail();
        self::assertIsBool($result);
    }
}
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
