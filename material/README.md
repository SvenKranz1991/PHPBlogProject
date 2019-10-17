##PHP Basis

PHP hat hingegen zum gängigen Austausch zwischen Browser und Server einen Zwischenschritt

Normal
Browser <--> Server

PHP --> Serverseitige Programmiersprache!!

Für den Browser ist es egal, ob auf dem Server PHP läuft.

<?php
    echo "Ich bin die programm.php"
?>

Alles was zwischen den Tags steht ist PHP Code.
PHP wird nicht 1:1 an den Server weitergeleitet, sondern von PHP verarbeitet.

Alles was ausserhalb der Tags steht ist PHP und wird als PHP ausgeführt.
Alles was ausserhalb wird, wird nicht als PHP ausgeführt.

`

<h1>Ich bin ausserhalb</h1>
<?php
    echo "Ich bin die programm.php"
?>

<p>Ich bin auch ausserhalb</p>
`

Die Html Tags werden direkt an den Client geschickt. PHP-Code vorher von PHP verarbeitet

PHP ist nur scharfgeschaltet in Dateien mit PHP Endung. Andernfalls nicht.
Wenn die Datei mit HTML endet wird sie 1:1 an den Client weitergeleitet und nicht als PHP verwertet.

## Installation

XAMPP von apacheFriends runterladen.
Bundle mit Apache - MariaDB(MySQL) - PHP - Perl

Apache -- wird auch httpd genannt.

## Root Folder von PHP

-   XAMPP(App) --> Volumes / mount / Explore --> Finder "./htdocs"

... hier befindet sich das Dashboard mit all den Files

Alle Dateien in einen erstellten Ordner verschieben ( Beispiel - "alt" - Ordner).
Das Dashboard in localhost:8080 wird dir anzeigen kein Object gefunden zu haben und sind damit bereit eigene Files zu schreiben.

Das Projekt wird sich in diesem Ordner befinden.
/Users/svenkranz/.bitnami/stackman/machines/xampp/volumes/root/htdocs

Öffne diesen Ordner in Atom.
Erstelle eine PHP Datei mit dem Beispiel oben und rufe diese auf, du wirst sehen, die Datei erscheint.

## Zu programm.php

Variablen
$test = 5; --> Variablen Deklaration und Zuweisung
echo "Hallo"; --> Textausgabe
$test++; --> schnelle Addition( Subtraktion geht auch )

Notizen:
PHP erwartet auch ein Semikolon.

Variablen in PHP können einen beliebigen Wert haben und ihn ändern. Eine Variable kann am Anfang ein String und am Ende des Protokolls ein Int sein.
Stichwort --> schwach typisiert.

Man kann Variablen vergleichen und sogar addieren. Es verhält sich dabei ähnlich zu Javascript.
Besonders wird das dann bei der Funktion Empty. Als String wäre eine "0" true, als Int wäre sie aber false.

--- !empty() zum testen von Variablen verwenden.

## Funktionen und Daten aus anderen Dateien importieren

### Include

<?php
    include "header.php";

    include "footer.php";
?>

Wenn ich Include verwende, kriege ich eine Warnung, aber das Programm läuft weiter.

### Include_once

Hier kann das Element nur einmal importiert werden.

### Require

Wenn ich require, wird das Programm abgebrochen, falls die Datei nicht existiert.

Von Hitesh Choudhary

-   PDO Research - use it.
-   Frameworks: Laravel - Symfony - dominating in Market of Corporation.
-   Normal Clients: Wordpress.
-   Wordpress Codex
-   Should can create customPlugins or Themes
