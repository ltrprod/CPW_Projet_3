<?php

namespace App;

require_once('Framework/Autoloader.php');

use App\Controller\ArticleController;
use App\Controller\ArticleListController;
use App\Controller\ArticleSoloController;
use App\Framework\Autoloader;
use App\Model\ArticleManager;
use App\Model\CommentManager;
use Exception;

Autoloader::run();


if (isset($_GET['action']) && $_GET['action'] == 'articleSolo') {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];
        (new ArticleController())->show($id);
    } else {
        throw new Exception('Aucun identifiant d\'article envoyé');
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'articleCreator') {
    (new ArticleController())->create();
} elseif (isset($_GET['action']) && $_GET['action'] == 'addComment') {
    $idArticle = $_GET['idArticle'];
    $commentManager = new CommentManager();
    $commentManager->postComment($idArticle, $_POST['alias'], $_POST['content'] );
} else {
    $articlesListController = new ArticleListController();
    $articlesArray = $articlesListController->getArticleList();
};
