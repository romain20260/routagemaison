<?php

namespace App;


class  ControllerAccueil
{
    ///route /
static function accueil()
{
    echo $_ENV['HOST'];
    $titrePage = "Acceuil";
    require_once (__DIR__."/../view/accueil.php");
}

}