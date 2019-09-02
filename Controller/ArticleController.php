<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Framework\Exception\NeedAuthenticationException;
use App\Framework\Exception\NotFoundException;
use App\Model\Article;
use App\Model\ArticleManager;
use App\Model\CommentManager;


/**
 * Class ArticleController
 * @package App\Controller
 */
class ArticleController extends Controller
{
    /**
     * @var ArticleManager
     */
    private $articleManager;

    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->articleManager = new ArticleManager();
    }


    /**
     * @throws \Exception
     */
    public function create()
    {
        $errors = [];
        if($this->checkToken()) {
            if (isset($_POST['author']) && isset($_POST['content']) && isset($_POST['linked_image'])) {


                $article = new Article();
                $article->setTitle($_POST['title']);
                $article->setAuthor($_POST['author']);
                $article->setImage($_POST['linked_image']);
                $article->setArticleContent($_POST['content']);

                $errors = $article->validate();
                if (!$errors) {
                    $this->articleManager->postArticle($_POST['title'], $_POST['author'], $_POST['content'], $_POST['linked_image']);
                    $this->redirect();

                }
            }
        } else{
            throw new NeedAuthenticationException('Identification de l\'utilisateur échouée');
        }
        $this->render("addArticle", ['errors' => $errors]);
    }

    /**
     * @param $id
     * @throws NotFoundException
     */
    function show($id)
    {
        try {
            $article = $this->articleManager->getArticle($id);
        } catch (\Exception $e) {
            throw new NotFoundException(' L\'identifiant d\'article est invalide');
        }
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($id);
        $this->render("soloArticle", [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    /**
     * @param $id
     * @throws NotFoundException
     */
    function showModify($id)
    {
        try {
            $article = $this->articleManager->getArticle($id);
        } catch (\Exception $e) {
            throw new NotFoundException(' L\'identifiant d\'article est invalide');
        }
        $this->render("modifyArticle", ['article' => $article, 'id' => $id]);

    }

    /**
     *
     */
    public function list()
    {
        $articleManager = new ArticleManager();
        $page = $_GET['page'] ?? 1 ;

        $articles = $articleManager->getArticles($page);

        if(!count($articles)){
            throw new NotFoundException("Pas d'autres articles");
        }

        $this->render("listArticle", ['articles' => $articles]);
    }

    /**
     *
     */
    public function adminArticlePanel()
    {
        $articleManager = new ArticleManager();
        $articles = $articleManager->getAdminArticles();
        $this->render("adminArticlePanel", ['articles' => $articles]);
    }

    /**
     * @param $id
     * @throws NotFoundException
     */
    public function delete($id)
    {
       if(!$this->articleManager->checkId($id)){
            throw new NotFoundException(' L\'identifiant d\'article est invalide');
        }
       if($this->checkToken()) {
           $articleManager = new ArticleManager();
           $articleManager->deleteArticle($id);
           $this->redirect('adminOptions');
       } else {
           throw new NeedAuthenticationException('Identification de l\'utilisateur échouée');
       }

    }


    /**
     * @param $id
     */
    public function modify($id)
    {
        if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['content']) && isset($_POST['linked_image'])) {
            $articlemanager = new ArticleManager();
            $articlemanager->modifyArticle($id, $_POST['title'], $_POST['author'], $_POST['content'], $_POST['linked_image']);
            $this->redirect('adminPanel');
        } else {
            throw new NotFoundException('Les champs ne sont pas remplis correctement');
        }
    }

}