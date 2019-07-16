<?php
use App\Model\ArticleManager;

$articleManager = new ArticleManager();
$articlesArray = $articleManager->getArticles();