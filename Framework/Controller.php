<?php

namespace App\Framework;

use App\Framework\Exception\CSRFException;
use App\Framework\Exception\NeedAuthenticationException;


/**
 * Class Controller
 * @package App\Framework
 */
class Controller
{
    /**
     * @param string $path
     * @param array $parameters
     * @param int $status
     */
    public function render(string $path, array $parameters = [], $status = 200)
    {
        http_response_code($status);
        header('Content-Type: text/html');

        echo View::render($path, $parameters);

    }

    /**
     * @param null $action
     * @param array $parameters
     */
    public function redirect($action = null, $parameters = [])
    {

        $url = (!$action) ? "index.php" : "index.php?action=" . $action;

        foreach ($parameters as $key => $value) {
            $url .= "&$key=$value";
        }

        header('Location: ' . $url);

    }

    /**
     * @return bool
     * @throws NeedAuthenticationException
     */
    public function checkIsConnected()
    {
        if (isset($_SESSION['isConnected'])) {
            return true;
        } else {
            throw new NeedAuthenticationException();
        }
    }

    /**
     * @return bool
     */
    public function checkIsConnectedNavbar()
    {
        if (isset($_SESSION['isConnected'])) {
            return true;
        }
    }

    /**
     * @return bool
     * @throws CSRFException
     */
    public function checkToken()
    {
        $submitedToken = $_SESSION['token'] ?? null;
        if (!$submitedToken) {
            throw new CSRFException();
        }
        if (isset($_SESSION['token']) && (isset($_POST['token']))) {
            if ($_SESSION['token'] == $_POST['token']) {
                return true;
            } else {
                throw  new CSRFException();
            }
        }
        throw  new CSRFException();
    }
}