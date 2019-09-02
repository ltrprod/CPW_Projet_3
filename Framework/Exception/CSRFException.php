<?php


namespace App\Framework\Exception;

class CSRFException extends \Exception
{
    protected $message = "Jeton CSRF invalide";
}