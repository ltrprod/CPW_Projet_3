<?php

namespace App;

require_once('Framework/Autoloader.php');

use App\Controller\AdminController;
use App\Controller\ArticleController;
use App\Controller\CommentController;
use App\Controller\ErrorController;
use App\Framework\Autoloader;
use App\Framework\Exception\NeedAuthenticationException;
use App\Framework\Exception\NotFoundException;
use Exception;

Autoloader::run();
$action = $_GET['action'] ?? 'home';

// TODO revoir implementation avec un switch
session_start();



try{

    if (isset($_GET['action']) && $_GET['action'] == 'soloArticle') {
        if (isset($_GET['id'])) {
            (new ArticleController())->show($_GET['id']);
        } else {
            throw new Exception('Aucun identifiant d\'article envoyé');
        }
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'listReportedComments') {
        (new CommentController())->showReported() ;
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'addArticle') {
        (new ArticleController())->create();
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'modifyArticle') {
        if (isset($_GET['id'])) {
            (new ArticleController())->modify($_GET['id']);
        }
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'articleModificationForm') {
        if (isset($_GET['id'])) {
            (new ArticleController())->showModify($_GET['id']);
        }
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'addComment') {
        $idArticle = $_GET['idArticle'];
        (new CommentController())->post($idArticle, $_POST['alias'], $_POST['content']);
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'reportComment') {
        if (isset($_GET['id'])) {
            if (isset($_POST['reason'])){
                (new CommentController())->report($_GET['id'],$_POST['reason'] );
            } else{
                throw new Exception('Aucune raison selectionnée pour pouvoir signaler le commentaire');
            }
        } else {
            throw new Exception('Aucun identifiant de commentaire envoyé');
        }
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'unReportComment') {
        if (isset($_GET['id'])) {
            (new CommentController())->unReport($_GET['id']);
        }
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'deleteComment') {
        if (isset($_GET['id'])) {
            (new CommentController())->delete($_GET['id']);
        }
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'deleteArticle') {
        if (isset($_GET['id'])) {
            (new ArticleController())->delete($_GET['id']);
        }else{
            throw  new NotFoundException();
        }
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'adminArticlePanel') {
        (new ArticleController())->adminArticlePanel();
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'login') {
        (new AdminController())->login();
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'logout') {
        (new AdminController())->login();
    }

    elseif (isset($_GET['action']) && $_GET['action'] == 'adminPanel') {
        (new AdminController())->adminPanel();
    }

    else {
        (new ArticleController())->list();
    }
}catch (NotFoundException $e){
    (new ErrorController())->error($e->getMessage(), 404);
}catch(NeedAuthenticationException $e){
    (new ErrorController())->error($e->getMessage(),401);
}

