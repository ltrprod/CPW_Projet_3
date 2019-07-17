<?php

namespace App;

spl_autoload_register(function ($class){

	if (preg_match("#^App\\\\#", $class)) {                       // Si $class commence par "App\"
		$file = str_replace('App\\', '', $class);          // chercher dans $class "App\" et remplacer par "../"
		$file = str_replace('\\', '/', $file);              // chercher dans $class "\" et remplacer par "/"
		$file .= ".php";                                                  // $file = $file.".php"
		require_once($file);
	}
});