<?php

namespace App\Controller;

use App\Framework\Controller;
use App\Framework\Exception\NeedAuthenticationException;
use App\Model\AdminManager;


/**
 * Class AdminController
 * @package App\Controller
 */
class AdminController extends Controller
{
    /**
     * @var AdminManager
     */
    public $adminManager;

    /**
     * AdminController constructor
     */
    public function __construct()
    {
        $this->adminManager = new AdminManager();
    }

    /**
     *
     */
    public function login()
    {
        $errors = [];
        if (isset($_POST['user']) && isset($_POST['password'])) {
            $error = $this->checkUser($_POST['user']);
            if (!$error) {
                $error = $this->checkPass($_POST['user'], $_POST['password']);
            }
            if (!$error) {
                $_SESSION['isConnected'] = $_POST['user'];
                $token = md5(bin2hex(openssl_random_pseudo_bytes(6)));
                $_SESSION['token'] = $token;
                return $this->redirect('adminPanel');
            } else {
                $errors[] = $error;
            }
        }
        $this->render('adminLogin', ['errors' => $errors]);
    }

    /**
     * @param $user
     * @return string|null
     */
    public function checkUser($user)
    {
        $errorString = null;
        if (!($this->adminManager->getUser($user))) {
            $errorString = "le nom d'utilisateur ou le password est incorrect";
        }
        return $errorString;
    }

    /**
     * @param $user
     * @param $password
     * @return string|null
     */
    public function checkPass($user, $password)
    {
        $errorString = null;
        $databaseHashedPassword = $this->adminManager->getPass($user);
        $check = password_verify($password, $databaseHashedPassword);
        if ($check === false) {
            $errorString = "le nom d'utilisateur ou le password est incorrect";
        }
        return $errorString;
    }

    /**
     * @throws NeedAuthenticationException
     */
    public function adminPanel()
    {
        $this->checkIsConnected();
        $this->render('adminPanel');
    }

    /**
     * @throws NeedAuthenticationException
     */
    public function logout()
    {
        if ($this->checkIsConnected()) {
            unset($_SESSION['isConnected']);
            $error = 'Vous vous êtes déconnecté avec succès.';
            $errors[] = $error;
        } else {
            $error = 'Vous devez vous connecté pour pouvoir vous deconnecter.';
            $errors[] = $error;
        }
        $this->render('adminLogin', ['errors' => $errors]);;
    }

}



