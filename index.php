<?php

namespace App;

require_once('Framework/Autoloader.php');

use App\Controller\AdminController;
use App\Controller\ArticleController;
use App\Controller\CommentController;
use App\Controller\ErrorController;
use App\Framework\Autoloader;
use App\Framework\Controller;
use App\Framework\Exception\CSRFException;
use App\Framework\Exception\NeedAuthenticationException;
use App\Framework\Exception\NotFoundException;
use Exception;

Autoloader::run();
session_start();
$action = $_GET['action'] ?? 'home';
try {
    switch ($action) {

        case "home":
            (new Controller())->home();
            break;

        case "listArticle":
            (new ArticleController())->list();
            break;

        case "login":
            (new AdminController())->login();
            break;

        case "logout":
            (new AdminController())->logout();
            break;

        case "adminPanel":
            (new AdminController())->adminPanel();
            break;

        case "adminArticlePanel":
            (new ArticleController())->adminArticlePanel();
            break;

        case "soloArticle":
            if (isset($_GET['id'])) {
                (new ArticleController())->show($_GET['id']);
            } else {
                throw new Exception('Aucun identifiant d\'article envoyé');
            }
            break;

        case "addArticle":
            (new ArticleController())->addArticle();
            break;

        case "createArticle":
            (new ArticleController())->create();
            break;


        case "modifyArticle":
            if (isset($_GET['id'])) {
                (new ArticleController())->modify($_GET['id']);
            }
            break;

        case "deleteArticle":
            if (isset($_GET['id'])) {
                (new ArticleController())->delete($_GET['id']);
            }
            break;

        case "articleModificationForm":
            if (isset($_GET['id'])) {
                (new ArticleController())->showModify($_GET['id']);
            }
            break;

        case "addComment":
            (new CommentController())->post($_GET['idArticle'], $_POST['alias'], $_POST['content']);
            break;

        case "listReportedComments":
            (new CommentController())->showReported();
            break;

        case "reportComment":
            if (isset($_GET['id'])) {
                if (isset($_POST['reason'])){
                    (new CommentController())->report($_GET['id'], $_POST['reason'], $_POST['idArticle']);
                } else {
                    throw new Exception('Aucune raison selectionnée pour pouvoir signaler le commentaire');
                }
            } else {
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
            break;

        case "unReportComment":
            if (isset($_GET['id'])) {
                (new CommentController())->unReport($_GET['id']);
            }
            break;

        case "deleteComment":
            if (isset($_GET['id'])) {
                (new CommentController())->delete($_GET['id']);
            }
            break;
    }
} catch (NotFoundException $e) {
    (new ErrorController())->error($e->getMessage(), 404);
} catch (NeedAuthenticationException $e) {
    (new ErrorController())->error($e->getMessage(), 401);
} catch (CSRFException $e) {
    (new ErrorController())->error($e->getMessage(), 400);
}

