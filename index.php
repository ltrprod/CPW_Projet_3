<?php
require_once('Controller/indexController.php');
require_once('View/indexView.php');
$test=null;


if($_GET['action'] == 'post') {
	if (isset($_GET['id']) && $_GET['id'] > 0) {
		$id = $_GET['id'];
		require_once('Controller/articleSoloController.php');
		$article = getArticleSolo($id);
		require('View/articleSoloView.php');
	}
	else {
		throw new Exception('Aucun identifiant de billet envoyé');
	}
}
else{
	require_once('Controller/articleListController.php');
	while ($data = $articlesArray->fetch()) {
		require('View/articleListView.php');
	}
}
