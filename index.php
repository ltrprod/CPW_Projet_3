<?php

namespace App;

require_once('Framework/Autoloader.php');

use App\Controller\ArticleController;
use App\Controller\CommentController;
use App\Framework\Autoloader;
use Exception;

Autoloader::run();


if (isset($_GET['action']) && $_GET['action'] == 'soloArticle') {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];
        (new ArticleController())->show($id);
    } else {
        throw new Exception('Aucun identifiant d\'article envoyé');
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'addArticle') {
    (new ArticleController())->create();
} elseif (isset($_GET['action']) && $_GET['action'] == 'addComment') {
    $idArticle = $_GET['idArticle'];
    (new CommentController())->post($idArticle, $_POST['alias'], $_POST['content']);

} else {
    $articlesListController = new ArticleController();
    $articlesArray = $articlesListController->list();
};

