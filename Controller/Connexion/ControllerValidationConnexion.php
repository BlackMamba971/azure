<<<<<<< HEAD
<?php

if (isset($_POST["connectionEtu"])) {

    header('Location: ../../View/ViewConnexion.html');
    exit();

}
if (isset($_POST["creationEtu"])) {
    header('Location: ../../View/ViewNouvCompteAdmin.html');
    exit();

}
if(isset($_POST["connectionAdmin"])){

    header('Location: ../../View/ViewConnexionAdmin.php');
    exit();
}
if(isset($_POST["btnRetour"])){

    header('Location: ../../Choix.php');
    exit();
}

=======
<?php

if (isset($_POST["connectionEtu"])) {

    header('Location: ../../View/ViewConnexion.html');
    exit();

}
if (isset($_POST["creationEtu"])) {
    header('Location: ../../View/ViewNouvCompteAdmin.html');
    exit();

}
if(isset($_POST["connectionAdmin"])){

    header('Location: ../../View/ViewConnexionAdmin.php');
    exit();
}
if(isset($_POST["btnRetour"])){

    header('Location: ../../Choix.php');
    exit();
}

>>>>>>> 15617da6d7e42ae0cf208f8ed00089f6b77981d3
