<?php

namespace App\Framework\Exception;

use Exception;


/**
 * Class CSRFException
 * @package App\Framework\Exception
 */
class CSRFException extends Exception
{
    /**
     * @var string
     */
    protected $message = "Jeton CSRF invalide";
}