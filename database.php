<?php
    $pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8',
    "root",
    "");

    // Googlen, es geht um Zeichen - Sonderfall
    // Überlege, ob es noch aktuellere Methoden hierfür gibt.
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    function fetch_posts() {
        global $pdo;
        $query = "SELECT * FROM `posts`";
        return $pdo ->query($query);
    }

    // GOOGLE FETCH()!

    function get_post($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE id = :id");  // Hier weiß php, dass es eine SQL Abrage ist und einer Wert noch übergeben wird.
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();

        // Schlecht, weil sensibel für SQL Injection
        // $query = "SELECT * FROM `posts` WHERE title='{$title}'"
        // $post = $pdo ->query($query);
        // return $post->fetch();

        // Es können auch mehrere Variablen übergeben werden ( wie in Node );
        // $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE title = ? AND name = ?");  // Hier weiß php, dass es eine SQL Abrage ist und einer Wert noch übergeben wird.
        // $stmt->execute([$title, $name]);
    }
 ?>
