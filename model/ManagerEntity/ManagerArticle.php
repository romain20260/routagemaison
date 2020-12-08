<?php

namespace App\ManagerEntity; ///pas de majuscule au sous namespace egalement dans larborescence 

use App\Entity\Article;
use Exception;
use PDO;

class ManagerArticle extends ManagerParent
{
    //j ai acces via mon parent a la proprietes connect


    public function All()
    {   
        //recuperer tous les post dans un tableau [titre, idarticle]
        parent::connection();//action heriter du parrent va mettre dans la proprietes connect la connexion a la BD ("un objet PDO")
        $rep = $this->connect->query('SELECT idarticle,titre FROM article');
        return $rep->fetchAll();//retourne le fetchAll de la requete 
         
    }
    public function ById( int $id)
    {
        //recuperer et renvoie un objets article fetcher par son idarticle
        parent::connection(); 
    $req = $this->connect->prepare('SELECT * FROM article WHERE idarticle=:id');
           $req->bindParam(':id',$id);
           $req->execute();
           $data = $req->fetch();
           return new Article($data);
        
    }
}
