<?php

namespace App\Framework;

use PDO;

/**
 * Class Manager
 * @package App\Framework
 */
class Manager
{

    /**
     * @return PDO
     */
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=cpwprojet3;charset=utf8', 'root', '');
        return $db;
    }
}