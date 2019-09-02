<?php

namespace App\Framework;

use App\Framework\Exception\CSRFException;
use App\Framework\Exception\NeedAuthenticationException;

class Controller
{

    public function render(string $path, array $parameters = [], $status = 200)
    {
        http_response_code($status);
        header('Content-Type: text/html');

        echo View::render($path, $parameters);

    }

    public function redirect($action = null, $parameters = [])
    {

        $url = (!$action) ? "index.php":"index.php?action=". $action;

        foreach($parameters as $key => $value){
            $url .= "&$key=$value";
        }

        header('Location: '.$url);

    }


    /**
     * @return bool
     * @throws NeedAuthenticationException
     */
    public function checkIsConnected()
    {
        if(isset($_SESSION['isConnected'])){
            return true;
        }
        throw  new NeedAuthenticationException();
    }

    public function checkIsConnectedNavbar()
    {
        if(isset($_SESSION['isConnected'])){
            return true;
        }
    }

    public function checkToken()
    {
        $submitedToken = $_POST['token'] ?? null;
        if(!$submitedToken){
            throw new CSRFException();
        }


        if (isset($_SESSION['token']) && (isset($_GET['token']) || isset($_POST['token'])))
        {
            if ($_SESSION['token'] == $_GET['token'] || $_POST['token']){
                return true;
            } else {
                throw  new NeedAuthenticationException();
            }
        } throw  new NeedAuthenticationException();
    }
}