<?php

namespace App;

use App\ManagerEntity\ManagerArticle;

class  ControllerArticle
{
    ///route article/all
static function getAll()
{
    $manage= new ManagerArticle();
    $data = $manage->All();
    require_once(__DIR__."/../view/articleAll.php");
   
}
    ///route article/{:num}
static function getById($id)
{
    $manage= new ManagerArticle();
    $data = $manage->ById($id);
    require_once(__DIR__."/../view/article.php");
   
}

}