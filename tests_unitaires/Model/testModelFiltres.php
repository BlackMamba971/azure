<<<<<<< HEAD
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelFiltres.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelFiltres extends TestCase
{
    /**
     * Teste la fonction FiltrerOffres($conn, $nom, $domaine, $mission, $nbetudiant)
     *
     * @return void
     *
     * @author Emeline
     */

    function testFiltrerOffres()
    {
        if (filtrerOffres(
                Conn::getInstance(),
                "NOM",
                "Domaine",
                "Missions",
                5
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }

    /**
     * Teste la fonction FiltrerEntreprises($conn, $nom, $ville, $codepostal, $secteurActivite)
     *
     * @return void
     *
     * @author Emeline
     */

    function testFiltrerEntreprises()
    {
        if (filtrerEntreprises(
                Conn::getInstance(),
                "NOM",
                "ville",
                59720,
                "Secteur"
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }
=======
<?php

namespace tests_unitaires\Model;
require "..\..\Model\ConnexionBDD.php";
require "..\..\Model\ModelFiltres.php";

use Model\Conn;
use PHPUnit\Framework\TestCase;

class testModelFiltres extends TestCase
{
    /**
     * Teste la fonction FiltrerOffres($conn, $nom, $domaine, $mission, $nbetudiant)
     *
     * @return void
     *
     * @author Emeline
     */

    function testFiltrerOffres()
    {
        if (filtrerOffres(
                Conn::getInstance(),
                "NOM",
                "Domaine",
                "Missions",
                5
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }

    /**
     * Teste la fonction FiltrerEntreprises($conn, $nom, $ville, $codepostal, $secteurActivite)
     *
     * @return void
     *
     * @author Emeline
     */

    function testFiltrerEntreprises()
    {
        if (filtrerEntreprises(
                Conn::getInstance(),
                "NOM",
                "ville",
                59720,
                "Secteur"
            ) == true) {
            $result = "true";
        } else {
            $result = "false";
        }
        self::assertIsString($result);
    }
>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
}