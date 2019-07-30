<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Model\ArticleManager;


class ArticleCreatorController extends Controller
{
	public function createArticle()
	{
		$articleManager = new ArticleManager();
		$articleManager->postArticle();
	}
}