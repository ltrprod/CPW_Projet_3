<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Model\CommentManager;


class CommentController extends Controller
{
    public function post($idArticle, $alias, $content)
    {
/*         if (isset($idArticle) && isset($_POST['alias']) && isset($_POST['content'])) {
            $comment = new Comment();
            $comment->setIdArticle($idArticle);
            $comment->setAlias($_POST['alias']);
            $comment->setContent($_POST['content']);

            $errors = $comment->validate();
            if (!$errors) {*/
                $commentManager = new CommentManager();
                $commentManager->postComment($idArticle, $alias, $content);
                header('Location: index.php');
/*            }
        }*/
    }
}
