<?php

namespace App\Framework;

class Controller
{

    public function render(string $view, array $parameters = [], $status = 200)
    {
        http_response_code($status);
        header('Content-Type: text/html');

        echo View::render($view, $parameters);

    }

    public function redirect($action= null, $parameters = [])
    {

        $url = (!$action) ? "index.php":"index.php?action=". $action;

        foreach($parameters as $key => $value){
            $url .= "&$key=$value";
        }

        header('Location: '.$url);

    }
}