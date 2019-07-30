<?php

namespace App;

require_once('Framework/Autoloader.php');

use App\Controller\ArticleCreatorController;
use App\Controller\ArticleSoloController;
use App\Controller\ArticleListController;
use App\Framework\Autoloader;
use App\Model\ArticleManager;

Autoloader::run();

if (isset($_GET['action']) && $_GET['action'] == 'articleSolo') {
	if (isset($_GET['id']) && $_GET['id'] > 0) {
		$id = $_GET['id'];
		$controller = new ArticleSoloController();
		$controller->getArticleSolo($id);
	} else{
		throw new \Exception('Aucun identifiant d\'article envoyé');
	}
} elseif (isset($_GET['action']) && $_GET['action'] == 'articleCreator'){
	require('View/articleCreatorView.php');
}elseif (isset($_GET['action']) && $_GET['action'] == 'addArticle'){
	$articlemanager= new ArticleManager();
	$articlemanager->postArticle( $_POST['title'],  $_POST['author'],  $_POST['content'],  $_POST['linked_image']);
	header('Location: index.php');
} else {
    require_once('Controller/ArticleListController.php');
	$articlesListController= new ArticleListController();
	$articlesArray = $articlesListController -> getArticleList();
    require('View/articleListView.php');
};
