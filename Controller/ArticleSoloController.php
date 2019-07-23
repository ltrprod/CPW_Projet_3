<?php
namespace App\Controller;

use App\Model\ArticleManager;
use App\Model\CommentManager;


class ArticleSoloController{


    function getArticleSolo($id){
        $articleManager = new ArticleManager();
        $article = $articleManager->getArticle($id);
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($id);

        require('View/articleSoloView.php');
    }
}