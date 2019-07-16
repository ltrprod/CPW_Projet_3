<?php
use App\Model\ArticleManager;
use App\Model\CommentManager;

function getArticleSolo($id){
	$articleManager = new ArticleManager();
	$article = $articleManager->getArticle($id);
	return $article;
}

function getCommentSolo($id){
	$commentManager = new CommentManager();
	$comments = $commentManager->getComments($id);
	return $comments;
}