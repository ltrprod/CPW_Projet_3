<?php

namespace App;


use App\Model\ArticleManager;


spl_autoload_register(function ($class) {

    if (preg_match("#^App\\\\#", $class)) {
        $file = str_replace('App\\', '', $class);
        $file = str_replace('\\', '/', $file);
        $file .= ".php";
        require_once($file);
    }
});


$manager = new ArticleManager();


try {

    echo $manager->getArticle(1)->getTitle();
} catch (\Exception $e) {
    echo $e->getMessage();
}


