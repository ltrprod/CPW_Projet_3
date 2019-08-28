<?php

namespace App;

require_once('Framework/Autoloader.php');

use App\Controller\ArticleController;
use App\Controller\CommentController;
use App\Controller\ErrorController;
use App\Framework\Autoloader;
use App\Framework\Controller;
use App\Framework\Exception\NotFoundException;
use App\Model\ArticleManager;
use Exception;

Autoloader::run();
$action = $_GET['action'] ?? 'home';

// TODO revoir implementation avec un switch
session_start();

$_SESSION['isConnected'] = true;

setcookie("test","ok");



try{

if (isset($_GET['action']) && $_GET['action'] == 'soloArticle') {
    if (isset($_GET['id'])) {
        (new ArticleController())->show($_GET['id']);
    } else {
        throw new Exception('Aucun identifiant d\'article envoyé');
    }
}

elseif (isset($_GET['action']) && $_GET['action'] == 'listReportedComments') {
    $commentController = (new CommentController())->showReported() ;
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
    }
}

elseif (isset($_GET['action']) && $_GET['action'] == 'adminOptions') {
    (new ArticleController())->admin();
}

else {
    (new ArticleController())->list();
};
}catch (NotFoundException $e){
    (new ErrorController())->error404($e->getMessage());
}

