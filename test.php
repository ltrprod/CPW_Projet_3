<?php

namespace App;

require_once('Framework/Autoloader.php');

use App\Controller\CommentController;
use App\Framework\Autoloader;
use App\Framework\Controller;
use App\Model\ArticleManager;
use App\Controller\ErrorController;

Autoloader::run();

$articleManager = new ArticleManager();
$count=$articleManager->countArticles();
echo $count;