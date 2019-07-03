<?php


    $db = new PDO('mysql:host=localhost;dbname=cpwprojet3;charset=utf8', 'root', '');
    $req = $db->query('SELECT articleId FROM article');
    while ($donnees = $req->fetch()) {
        echo $donnees['articleId'];
    }