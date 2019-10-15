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


 <?php
     echo "<hr /> <br />";
     echo "<h3>If Else - mit Empty - besser!</h3> <br />";
    $name = "Sven";
    echo "Variable Name = {$name}";
    if (!empty($name)) {
            echo "<hr /> <br />";
        echo "Variable enthält einen Namen oder String!";
    }  else {
            echo "<hr /> <br />";
        echo "Variable ist leer!";
    }

?>

<?php
    echo "<hr /> <br />";
    echo "<h3>If Else - Ifelse abfragen</h3> <br />";
   $number = 42;
   echo "Variable Name = {$number}";
   if ($number > 20) {
       echo "<hr /> <br />";
       echo "Variable größer als 20!";
   }  else if ($number > 42) {
       echo "<hr /> <br />";
       echo "Variable größer als 42!";
   } else {
       echo "<hr /> <br />";
       echo "Variable is kleiner als 20";
   }
?>


<!-- strtolower -->

<?php

echo "<hr /> <br />";
echo "<h3>Strtolower - strtoupper</h3> <br />";
    $stringA = strtolower("HALLO");

    echo "To Lower {$stringA} <-> to Upper ". strtoupper($stringA);


 ?>

<!-- String Replace -->

 <?php

 echo "<hr /> <br />";
 echo "<h3>str_replace</h3> <br />";
     $stringB = "Sven HALLO";
     echo $stringB;
     echo str_replace("Sven", "Moritz", $stringB);


  ?>


<!-- String Position -->

<?php
    echo "<hr /> <br />";
    echo "<h3>strpos</h3> <br />";
    $stringB = "Sven HALLO";
    echo $stringB . " <br />";
    echo strpos($stringB, "HALLO"). ".ten Position";
    // Liefert false wenn Begriff nicht gefunden.

    $ergebnis = strpos($stringB, "S");
    // Aufpassen bei Position 0 weil empty auch false ausgeben würde. Deswegen diese Variante
    if($ergebnis !== false) {        // wenn du nur ein gleichheitszeichen benutzt kommt false raus
        echo "<br />Begriff gefunden!";
    } else {
        echo "<br /> Nicht gefunden!";
    }
?>

<!-- While Schleife -->


<?php

    echo "<hr /> <br />";
    echo "<h3>While Schleife</h3> <br />";

    $whileInt = 56;

    while ($whileInt > 42 ) {
        echo "{$whileInt} <br/>";

        $whileInt--;
        if($whileInt == 42) {
            echo "<br /> Anzahl erreicht! Variable {$whileInt}";
        }
    }


?>


 <!-- For Schleife -->


 <?php

    echo "<hr /> <br />";
    echo "<h3>For Schleife</h3> <br />";

    $whileIntB = 56;


    for($x = 50; $x <= 56; $x = $x += 4) {   // andere schreibweise für $x = $x + 4

        echo "<br /> {$x}";

    }

    echo "<br /> x =  ". $whileIntB;


?>


<!-- Aufgabe - For Schleife -->


<?php

   echo "<hr /> <br />";
   echo "<h3>Aufgabe - For Schleife</h3> <br />";

   $end = 5;
   $save = 0;
   $start = 0;

   for($x = $start; $x <= $end; $x++) {   // andere schreibweise für $x = $x + 4
       $save += $x;
   }

   echo "<br /> Result - For Schleife =  ". $save;


?>

<!-- Aufgabe - While Schleife -->


<?php

   echo "<hr /> <br />";
   echo "<h3>Aufgabe - While Schleife</h3> <br />";

   $end = 5;
   $save = 0;
   $b = 0;

   while($b <= $end) {   // andere schreibweise für $x = $x + 4
       $save += $b;
       $b++;
   }

   echo "<br /> Result - While Schleife =  ". $save;


?>


<!-- Break & Continue -->

<?php

   echo "<hr /> <br />";
   echo "<h3>Break & Continue</h3> <br />";

   for($x = 0; $x <= 100; $x++) {   // andere schreibweise für $x = $x + 4
       if ($x != 13) {
           var_dump($x);
           continue;                // überspringt die aktuelle iteration, 13 wird hier übersprungen
           break;                   // bricht eine schleife ab
       }
       var_dump($x);
   }

   echo "<br /> Result - Break Continue =  ". $save;


?>
