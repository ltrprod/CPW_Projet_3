<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Model\ArticleManager;


class ArticleListController extends Controller
{

	public function getArticleList()
	{
		$articleManager = new ArticleManager();
		$articlesArray = $articleManager->getArticles();
        require('View/articleListView.php');
	}
}