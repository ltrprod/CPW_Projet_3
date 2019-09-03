<?php

namespace App\Framework\Exception;

use Exception;


/**
 * Class NeedAuthenticationException
 * @package App\Framework\Exception
 */
class NeedAuthenticationException extends Exception
{
    /**
     * @var string
     */
    protected $message = "Une authentification est nécessaire pour accéder à la ressource.";
}