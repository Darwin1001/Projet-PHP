<?php
include_once('bdd.php');

class ArticlesModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function getArticles()
    {
        return $this->bdd->query("SELECT * FROM films")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id)
    {
        return $this->bdd->query("SELECT * FROM films WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }
}



