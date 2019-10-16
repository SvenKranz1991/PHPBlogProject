<?php
    $pdo = new PDO('mysql:host=localhost;dbname=blog',
    "root",
    "");



    function fetch_posts() {
        global $pdo;
        return $pdo ->query("SELECT * FROM `posts`");
    }

    // GOOGLE FETCH()!

    function get_post($title) {
        global $pdo;
        $post = $pdo ->query("SELECT * FROM `posts` WHERE title='{$title}'");
        return $post->fetch();
    }
 ?>
