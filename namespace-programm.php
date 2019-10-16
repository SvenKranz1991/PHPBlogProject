<?php

// Nutzen von Namespace - schaue in src
// Autoloader um Klassen automatisch zu importieren

function autoload($className) {
    // PSR-4    -- funktioniert noch nicht
    // $prefix = "App";
    // $dir = "./src";
    //
    // $clss = substr($className, strlen($prefix));
    // $clss = str_replace("\\", "/", $clss);
    //
    // if (file_exists("{$dir}{$clss}.php")) {
    //     require "{$dir}{$clss}.php";
    // }

    // PSR-0
    $className = str_replace("\\", "/", $className);
    if (file_exists("./src/{$className}.php")) {
        require "./src/{$className}.php";
    }
}

spl_autoload_register("autoload");

// $post = new App\Blog\Post();             BUG
// var_dump($post);
//
// $post2 = new App\Forum\Post();
// var_dump($post2);

$post = new Blog\Post();
var_dump($post);

$post2 = new Forum\Post();
var_dump($post2);

 ?>
