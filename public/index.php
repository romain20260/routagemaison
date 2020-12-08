<?php

use Akibatech\Router;
use App\ControllerAccueil;


require "../vendor/autoload.php";





$monSuper = new Router;

//affect un constante du fichier racine de l'app soit 2 niveau parent du fichier actuelle
define("RACINE",dirname($_SERVER["PHP_SELF"],2)."/");//retourne /routagemaison/ si pas de modification du fichier root

//donc j ai un constant RACINE qui  vaut /routagemaison/

$monSuper->get(RACINE,'App\ControllerAccueil::accueil');


$monSuper->get(RACINE.'article/all','App\ControllerArticle::getAll');


$monSuper->get(RACINE.'article/{:num}','App\ControllerArticle::getById');

////faire une route qui pour un formulaire d ajout article 

///faire la route qui traite le formulaire 

///faire uen formulaire de commantaire 

//faire qui traite le post du comentaire 


$monSuper->whenNotFound(function () {
    echo 'Page non trouvée';
});

$monSuper->listen();
