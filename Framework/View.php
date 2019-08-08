<?php

namespace App\Framework;

class View{


    public static function render(string $path, array $parameters = []): string
    {
        ob_start();
        extract($parameters);
        require "View/".$path."View.php";

        return ob_get_clean();
    }
}