<<<<<<< HEAD
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php ";
require "..\..\Model\ModelAdminBtnRole.php";

use PHPUnit\Framework\TestCase;

class ModelAdminBtnRoleTest extends TestCase
{
    function testGetAdminDataByRoleAndReturnJSON()
    {
        $result = getAdminDataByRoleAndReturnJSON('tous');
        self::assertJson($result);
    }
}
=======
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php ";
require "..\..\Model\ModelAdminBtnRole.php";

use PHPUnit\Framework\TestCase;

class ModelAdminBtnRoleTest extends TestCase
{
    function testGetAdminDataByRoleAndReturnJSON()
    {
        $result = getAdminDataByRoleAndReturnJSON('tous');
        self::assertJson($result);
    }
}
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
