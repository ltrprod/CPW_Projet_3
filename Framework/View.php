<?php

namespace App\Framework;

/**
 * Class View
 * @package App\Framework
 */
class View
{
    /**
     * @param string $path
     * @param array $parameters
     * @return string
     */
    public static function render(string $path, array $parameters = []): string
    {
        ob_start();
        extract($parameters);
        require "View/" . $path . "View.php";
        return ob_get_clean();
    }
}