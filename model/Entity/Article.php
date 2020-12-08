<?php

namespace App\Entity;

class Article
{
    public $idarticle;
    private $titre;
    private $contenu;

public function __construct($valeurs)
{
    $this->hydrate($valeurs);
}
private function hydrate($data)//hydratation method
{
    foreach($data as $key => $value)
    {
        $method = 'set'.$key;
        if(method_exists($this, $method))
        {
            $this->$method($value);//j appelle le setter si il existe 
        }
    }
}
//setter
private function setIdArticle($value)
{
    $this->idarticle = $value;
}
private function setTitre($value)
{
    $this->titre = $value;
}
private function setContenu($value)
{
    $this->contenu = $value;
}
//getter
public  function getTitre()
{
    return $this->titre;
}
public  function getContenu()
{
    return $this->contenu;
}
}
