<!-- PHP Info / Start / Setup -->
<!-- 1. über phpInfo Informationen zur Konfiguration bekommen
2. auf localhost:port/phpmyadmin zum Dashboard und eine neue DB erstellen
3. Neues PDO erstellen und eine Verbindung zur Datenbank schaffen -->

<?php

// phpInfo();  // Hier bekommst du die Info über Konfiguration - schaue nach PDO um zu schauen welche Datenbanken unterstützen werden

// über locahost:port/phpmyadmin kommst du zur adminseite

// erstelle eine neue Datenbank indem du auf Neu klickst und nenne sie in dem Fall blog
// MariaDB ist hierbei identisch zu mysql.
/////////////////////////////
////////////////////////////



// Verbindung zur Datenbank
// Credentials müssen hierfür noch erstellt werden.
$pdo = new PDO('mysql:host=localhost;dbname=blog', "root", "");


$res = $pdo ->query("SELECT * FROM `posts`");
var_dump($res);

foreach ($res AS $row) {
    var_dump($row);
}


?>
