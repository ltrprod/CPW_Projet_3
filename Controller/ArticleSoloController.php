<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Model\ArticleManager;
use App\Model\CommentManager;
use Exception;


class ArticleSoloController extends Controller
{


	function getArticleSolo($id)
	{
		$articleManager = new ArticleManager();
		try {
			$article = $articleManager->getArticle($id);
		} catch (Exception $e) {
			echo $e->getMessage();
			exit();
		}
		$commentManager = new CommentManager();
		$comments = $commentManager->getComments($id);
		require('View/articleSoloView.php');
		require('View/commentSoloView.php');
	}

	function createComment($id)
	{
		$id=$idArticle;
		$commentManager = new CommentManager();
		$comments = $commentManager->postComment($idArticle, $alias, $contentComment);
	}
}