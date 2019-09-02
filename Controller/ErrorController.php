<?php

namespace App\Controller;
use App\Framework\Controller;

class ErrorController extends Controller
{

    public function error($message = 'error', $status)
    {
        $this->render('error', [$message], $status);
    }
}