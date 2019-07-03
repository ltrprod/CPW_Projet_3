<?php

class Manager
{

    protected function dbConnect()
    {

        $db = new PDO('mysql:host=localhost;dbname=cpwprojet3;charset=utf8', 'root', '');
        return $db;
    }

}

class articleManager extends Manager
{
    public function postArticle()
    {
    }

    public function modifyArticle()
    {
    }

    public function deleteArticle()
    {
    }

    public function getArticle()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT articleId FROM article ORDER BY articleDate DESC LIMIT 0, 5');
        return $req;

    }
}

class commentManager extends Manager
{
    public function postComment()
    {
    }

    public function deleteComment()
    {
    }

    public function getComment()
    {
    }

    public function reportComment()
    {
    }

}


$a = new articleManager();
$a->getArticle();
while ($donnees = $a->fetch()) {
    echo $donnees['articleId'];
}
