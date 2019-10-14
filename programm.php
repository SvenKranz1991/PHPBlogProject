<?php

    // Text Ausgabe
    echo "Ich bin die programm.php, Sven! <br />";
    // Zahlenausgabe
    echo 6;
    echo 5;
    // Addition
    echo "<br />";
    echo 6 + 11;
    // Concatenation
    echo "<br />";
    echo "1+1 = ", 1+1;
    // Multiplikation und Kommazahlen
    echo "<br />";
    echo 5*12;
    echo 5.2;
 ?>


<!-- Variablen -->

 <?php
 // Variablen werden mit $ Zeichen geschrieben.
 $test = 5;
 echo "<br />";
 echo $test;
 echo "<br />";
 echo $test / 2 + $test;


  ?>



  <!-- BMI Rechner -->

<?php
    $groesse = 1.89;
    $gewicht = 104;

    $bmi = ($gewicht / ($groesse + $groesse));
    echo "<br />";
    echo "BMI als Formel: ", $bmi;
    echo "<br />";
    echo "BMI : ", ($gewicht / ($groesse + $groesse));

 ?>

 <!-- Text Formatierung -->

 <?php
    echo "<br />";
    // String Concatenation
    echo "Ich bin immernoch die programm.php" . "...";
    // Variablen mit String

    $name = "Sven";
    echo "<br />";
    echo "Hallo, " . $name . "!";

    // Einfach Anführungszeichen
    // Unterschied zwischen Einfachen und Doppelten:
    // Doppelte bieten mehr Möglichkeiten.
    echo "<br />";
    // Das ist möglich:
    echo "Hallo, $name.";
    echo "<br />";
    // Mit einfach nicht:
    echo 'Hallo, $name.';
    echo "<br />";
    // Alternative Schreibweise
    echo "Hallo, {$name}";
    // Nicht verwechseln mit der Variante in JSX
    // ${prop.Beispiel}

    // In den Varianten kann man den Punkt weglassen.
    //////////////////

    // Zeilenumbruch:
    echo "Zeilenumbruch: <br />";
    echo "\n";
    echo "<br />";
    // Das ist möglich:
    echo "Hallo, $name. \n";
    echo "<br />";
    // Mit einfach nicht:
    echo 'Hallo, $name. \n';
    echo "<br />";
    // Alternative Schreibweise
    echo "Hallo, {$name} \n";
    echo "<br />";
    echo "123";


    // Man muss unterscheiden zwischen dem Quellcode und das was der Server anzeigt.
    // PHP Code landet in den Ausgabe HTML Code.
    // Deswegen musst du für Umbrüche in HTML schreiben.
    echo "<br />";
    echo "<br />Was geht, Sven? <br /> Du lernst Html!"; // funktioniert

  ?>


<!-- Funktionen in PHP -->

<?php

    // Länge des Strings;
    echo "<br /> Länge des Strings 'Sven Mustermann': <br />";
    $name = "Sven Mustermann";
    echo strlen($name);
    echo "<br />";
    // Vergleichbar mit string.length in Javascript.

    // var_dump($name)
    var_dump($name);

    // Gibt uns den Typ der gegebenen Variable an.
    // Praktisch zum debuggen.
    // Es zeigt den Wert und Typ an.

?>


<!-- Boolean True/False -->

<?php
    echo "<br />";
    echo "Boolean: ";
    $var = false;
    var_dump($var);
        echo "<br />";
    $meinName = (false AND false);
    // wenn eins von beiden stimmt gib true aus;
    var_dump($meinName);
?>

<!-- LERNE VERGLEICHSOPERATOREN IN PHP -->

<?php


    // Mathematische Vergleichsoperatoren
    echo "<hr /> <br />";
    echo "<h3>Vergleichoperatoren</h3> <br />";
    $a = 1;
    $b = 0;


    $istGleich = ($a == $b);
    $identisch = ($a === $b);
    $ungleich = ($a != $b);
    $nichtIdentisch = ($a !== $b);
    $kleiner = ($a < $b);
    $kleinergleich = ($a <= $b);
    $größer = ($a > $b);
    $größerals = ($a >= $b);
    echo "Ausgangswert a = {$a} b = {$b} <br />";

    echo ("<hr /> <br /> istgleich : {$istGleich} <br /> identisch : {$identisch} <br /> ungleich : {$ungleich} <br /> istnichtidentisch : {$nichtIdentisch} <br /> kleiner : {$kleiner} <br /> kleinergleich : {$kleinergleich} <br /> größer : {$größer} <br /> größerals: {$größerals}");


    // True or False

    echo "<br /> <hr /> <h3>OR</h3> <br />";
    $gehalt = 25000;
    $vermoegen = 10000;
    $erbschaft = 0;

    if($gehalt > 10000 OR $vermoegen > 50000 OR $erbschaft > 1000000) {
       echo "Wow, du bist reich!";
    } else if($gehalt < 1000 AND $vermoegen < 10000 AND $erbschaft == 0) {
       echo "Kleines Gehalt, wenig Vermögen, keine Erbschaft, schade!";
    } else {
      echo "Keine der Bedingungen war erfüllt";




}
    echo "<hr />";


    // für mehr
    // https://www.php-einfach.de/php-tutorial/logische-operatoren/
 ?>


<!-- empty -->

<?php
    echo "<br />";
    $emptyVar = "";
    echo "Empty gibt true aus, wenn die Variable leer oder Null ist.";
    var_dump(empty($emptyVar));
 ?>

 <!-- isset -->

 <?php
    echo "<br />";
    $issetVar = "hello";
    $isNotSet;
    echo "Isset gibt aus, ob eine Variable mit einem Wert deklariert ist.";
    var_dump(isset($issetVar));  // true
    var_dump(isset($isNotSet)); // false
  ?>

  <!-- unset -->

  <?php
        echo "<br />";
        echo "Unset löscht eine Variable komplett";
        $isUnset = "Hallo";
        $isNotUnset = "4";


        // unset($isUnset);
        var_dump(isset($isUnset)); // true
        unset($isNotUnset);
        var_dump(isset($isNotUnset)); // false
   ?>


<!-- if else -->

<?php
    echo "<hr /> <br />";
    echo "<h3>If Else</h3> <br />";

    $trueOrFalse = false;

    echo "Hast du hunger, Sven?";
    echo "      Variable {$trueOrFalse}";
    if ($trueOrFalse) {
        echo "<br /> <hr />Ich habe hunger. <br /> <hr />";
    } else {
        echo " <br /> <hr />Ich habe keinen Hunger. <br /> <hr />";
    }

 ?>
