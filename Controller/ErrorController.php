<?php

namespace App\Controller;
use App\Framework\Controller;

class ErrorController extends Controller
{

    public function error404($message ='')
    {
        http_response_code(404);
        header('Content-Type: text/html');
        $messages[0] = 'Error 404 : La page selectionnée n\'exite pas. '.$message;
        $this->render('error404', $messages, '404');
    }
}