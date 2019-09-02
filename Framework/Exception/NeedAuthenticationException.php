<?php


namespace App\Framework\Exception;


class NeedAuthenticationException extends \Exception
{
    protected $message = "Une authentification est nécessaire pour accéder à la ressource.";
}