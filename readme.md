****
Les namespaces et autoload avec composer
<br>
Trois namespace a l'application (hors namespace des dépendances tierce)
Il s'est charge en PSR-4 dans le fichier composer. Json
Il s'agit de 
App\ (le namespace vendor) contient les namespace des Controller (dans le dossier Controller)
App\Entity (le namespace des entités dans le dossier model/entity) 
App\ManagerEntity (le namespace des manager "DAL" qui se charge du CRUD des entité)

Après il y a aussi le namespace de la bibliothèque akibatech "ROUTEUR", et aussi celui de dotenv et c’est dépendances

****
htaccess
<br> 
Redirection dans Public/index.php
Toutes les requêtes HTTP sont dirigées dans ce fichiers (office de frontcontroller) notre point d’entrée de l’application 
****
Constante Racine 
<br>
Dans le fichier index.php 
Création d'une constant qui a pour valeur le nom du fichier englobant toute l’application (simulacre du root de l’application)
FRONT_END
Pas d'utilisation de moteur de Template ou autre en front juste des include de syntaxe html 
Voir fichier dans vue/blocTemplate (pour les blocs)
.gitignore
Contient les fichiers ignore par git 

La bibliothèque DOTENV
Bibliothèque qui permet de définir un .env pour les variable d’environnement 

.env (doit contenir) :

#################
connection DATABASE

HOST = "?????"
DBNAME = "????"
USERNAME = " ????"
PASSWORD = "????"
#################
Permettant la connexion a la DB lors de la création d’instance PDO

DAL (Data Access Layer)
Nous détachons la responsabilité du CRUD des model utilisable pour la vue.
Nous créons pour chaque entité présente en Data Base une entités manager qui aura pour rôle de gérer le CRUD.
Une class abstract Manager Parent lui aura pour rôle de disposer à l’entité manager (ManagerEntity) la connexion a la Data Base via un objets PDO.


****
La bibliothèque akibatech/routeur a pour rôle de routeur chaque requete HTPP vers la méthode du Controller lui étant assignée.

Router->verbeHTTP (URL,callable) ;

La liste complète de toutes les routes que nous créons et acquis par la route dans un Array 
(Ce que l’on appelle communément une route-collection)

Par le mécanisme :

Une requete HTTP = une adresse URL
Si l’adresse match avec notre collection de route nous le router cette charge de déclencher la callable 

****
Les méthodes des Controllers
<br>

Il se charge du métier avec l'utilisation des model (entité, entitymanager ou éventuellement d'autres).
C’est le cerveau de notre application, il s’occupe de faire les processus, le métier pour obtenir le résultat attendu par la route, il as pour cela acess à des model (entité, manager etc…) pour faire ce métier.

****
