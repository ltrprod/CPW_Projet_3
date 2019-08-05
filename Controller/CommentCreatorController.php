<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Model\CommentManager;


class CommentCreatorController extends Controller
{
    public function addComment()
    {
        $commentManager = new CommentManager();
        $commentManager->postComment($idArticle, $alias, $content);
    }
}
