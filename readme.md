****
les namespaces et autoload avec composer
<br>
trois namespace a l'application (hors namespace des dependances tierce)
il s'est charge en PSR-4 dans le fichier composer.json
il s'agit de 
App\ (le namespace vendor) contient les namespace des controller (dans le dossier controller)
App\Entity (le namespace des entité dans le dossier model/entity) 
App\ManagerEntity (le namespace des manager "DAL" qui ce charge du crud des entity)

apres il y a aussi le namespace de la bibliotheque akibatech "ROUTEUR"

****
htaccess
<br> 
redirection de la direction du fichier d "ecoute dans Public/index.php
sinon configuration pour utilisation du router 
****
constante Racine 
<br>
dans le fichier index.php 
creation d'une constant qui a pour valeur le nom du fichier englobant tout le contenue du projet 
du coup le changeant du nom du dossier n affecteras as l application 
****
pas d'utilisation de moteur de template ou autre en front juste des include de syntaxe html 
voir fichier dans view/blocTemplate (pour les bloc)
****
niveau DAL 
managerParent est le parent des manager il fait heriter la connexion a la DB (PDO)
puis a chaque entity presente en DB un manager qui lui est allouer pour effectuer les tache du CRUD (DAL "dat layer abstract")
****
le requetes sont envoyer a index.php qui ecoute et dispatche celon la routecollection trigger 
. declenchement de methode adequate du controller en charge de gerer la route

url->trigger"route"->declenche la methode allouer
****
les methode des controller ce charge du metier avec l'utilisation des model (entity,entitymanager ou effenctuellement d'autres)
puis renvoie une vue ou pas 
****