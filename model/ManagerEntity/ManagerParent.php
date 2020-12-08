<?php

namespace App\ManagerEntity;

use Exception;
use PDO;
use Dotenv\Dotenv;

////pourfaire appelle au variable $_ENV du fichier dans la racine .env
$dotenv = Dotenv::createImmutable(dirname(__DIR__,2));
$dotenv->load();

// classer abstraite ne peuvant pas etre instance 
// parent de toutes les classe manager qui manage le CRUD (DAL)

abstract class ManagerParent
{
    protected $connect;

    protected function connection()
    {
        // fonction affect un objet PDO à $connect qui lui seras utiliser par ses enfants
        try
        {
            $this->connect = new PDO("mysql:host=".$_ENV["HOST"].";dbname=".$_ENV["DBNAME"].";charset=utf8",$_ENV["USERNAME"],$_ENV["PASSWORD"]);
        } 
        catch(Exception $e)
        {
            die("err:".$e->getMessage());
        }
    }

}