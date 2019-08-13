<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Model\Article;
use App\Model\ArticleManager;
use Exception;

use App\Model\CommentManager;


class ArticleController extends Controller
{
    public function create()
    {
        $errors = [];

        if (isset($_POST['author']) && isset($_POST['content']) && isset($_POST['linked_image'])) {


            $article = new Article();
            $article->setTitle($_POST['title']);
            $article->setAuthor($_POST['author']);
            $article->setImage($_POST['linked_image']);
            $article->setArticleContent($_POST['content']);

            $errors = $article->validate();
            if (!$errors) {
                $articlemanager = new ArticleManager();
                $articlemanager->postArticle($_POST['title'], $_POST['author'], $_POST['content'], $_POST['linked_image']);

                $this->redirect();

            }
        }


        $this->render("addArticle", ['errors' => $errors]);
    }

    function show($id)
    {
        $articleManager = new ArticleManager();
        $check = $articleManager -> checkId($id);
        if (!isset($check)) {
            (new ErrorController())->error404(' L\'identifiant d\'article est invalide');
        } else {
            $article = $articleManager->getArticle($id);
            $commentManager = new CommentManager();
            $comments = $commentManager->getComments($id);
            $this->render("soloArticle", [
                'article' => $article,
                'comments' => $comments
            ]);
        }
    }

    function showModify($id)
    {
        $articleManager = new ArticleManager();
        $check = $articleManager -> checkId($id);
        if (!isset($check)) {
            (new ErrorController())->error404(' L\'identifiant d\'article est invalide');
        } else {
            $article = $articleManager->getArticle($id);
            $this->render("modifyArticle", ['article' => $article, 'id'=> $id ]);
        }
    }

    public function list()
    {
        $articleManager = new ArticleManager();
        $articles = $articleManager->getArticles();
        $this->render("listArticle", ['articles' => $articles]);
    }

    public function admin(){
        $articleManager = new ArticleManager();
        $articles = $articleManager->getAdminArticles();
        $this->render("adminOptions", ['articles' => $articles]);
    }

    public function delete($id){
        $articleManager = new ArticleManager();
        $articleManager->deleteArticle($id);
        $this->redirect('adminOptions');

    }

    public function modify($id){
        if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content']) && isset($_POST['linked_image'])) {
                $articlemanager = new ArticleManager();
                $articlemanager->modifyArticle($id, $_POST['title'], $_POST['author'], $_POST['content'], $_POST['linked_image']);
                $this->redirect('adminOptions');
        } else {
            echo('ecrire une erreur');
        }
    }

}