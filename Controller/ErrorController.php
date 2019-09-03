<?php

namespace App\Controller;

use App\Framework\Controller;


/**
 * Class ErrorController
 * @package App\Controller
 */
class ErrorController extends Controller
{
    /**
     * @param string $message
     * @param $status
     */
    public function error($message = 'error', $status)
    {
        $this->render('error', [$message], $status);
    }
}