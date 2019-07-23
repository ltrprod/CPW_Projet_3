<?php

namespace App;

require_once('Framework/Autoloader.php');

use App\Controller\ArticleSoloController;
use App\Framework\Autoloader;

Autoloader::run();


if (isset($_GET['action']) && $_GET['action'] == 'articleSolo') {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];
        $controller = new ArticleSoloController();
        $controller->getArticleSolo($id);
    } else {
        throw new Exception('Aucun identifiant d\'article envoyé');
    }
} else {
    require_once('Controller/articleListController.php');

    $articles = $articlesArray->fetchAll();
    require('View/articleListView.php');
};
