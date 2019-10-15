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


<!-- Arrays in PHP -->

<?php
    echo "<hr /> <br />";
    echo "<h3>Arrays</h3> <br />";
    echo "<br />";
    echo "Initialized<br />";
    $arrayA = array();      // Initialize Array
    var_dump($arrayA);
    echo "<br />";
    echo "Array with Element<br />";
    $arrayB = array("Banane");      // Array with Element
    var_dump($arrayB);
    echo "<br />";
    echo "Array with multiple Elements<br />";
    $arrayC = array("Banane", "Birne", "Apfel");      // Array with Element
    var_dump($arrayC);
    echo "<br />";
    echo "Specific Element<br />";
    echo $arrayC[2];                // Specific Element of Array
    echo "<br />";
    echo "Length of Array<br />";
    echo count($arrayC);            // Length of Array

    echo "<br />";
    echo "Element of Array on Position of Index Variable<br />";
    $index = 2;
    echo $arrayC[$index];
 ?>


<!-- Arbeiten mit Arrays -->

<?php
    echo "<hr /> <br />";
    echo "<h3>Arbeiten mit Arrays</h3> <br />";
    echo "<br />";
    echo "Element einem Array am Ende hinzufügen<br />";
    $arrayC[] = "Reis";
    var_dump($arrayC);
    echo "<br />";
    echo "Element an den Anfang eines Arrays setzen<br />";
    array_unshift($arrayC, "Kartoffeln");
    var_dump($arrayC);
    echo "<br />";
    echo "Array Shift<br />";
        var_dump(array_shift($arrayC));         // Nimmt letztes Element raus und gibt es zurück
    echo "<br />";
    echo "Array Pop<br />";                    // Nimmt erstes Element raus und gibt es zurück - man kann das ergebnis in einer zwischenvariable speicher.
        var_dump(array_pop($arrayC));
 ?>

<!-- ForEach Schleife -->

<?php
    echo "<hr /> <br />";
    echo "<h3>Foreach - Schleife</h3> <br />";
    echo "<br />";
    echo "Example<br />";
    echo "Normale For-Schleife<br />";
    echo "<ul>";

    for ($x = 0; $x < count($arrayC); $x++) {
        echo "<li>{$arrayC[$x]}</li>";
    }
    echo "</ul>";
    echo "ForEach-Schleife<br />";
    echo "<ul>";

    foreach ($arrayC as $produkt) {
        echo "<li>{$produkt}</li>";
    }
    echo "</ul>";
    echo "</ul>";
    echo "ForEach-Schleife mit Key<br />";
    echo "<ul>";

    foreach ($arrayC as $key => $produkt) {
        echo "<li>{$key} : {$produkt}</li>";            // key gibt index mit raus
    }
    echo "</ul>";
 ?>

<!-- Assoziative Arrays -->
<!-- "Für mich" - Pseudo Klassen in dennen man dem Index einen String zu weisen Kann -->

<?php
    echo "<hr /> <br />";
    echo "<h3>Assoziative Arrays</h3> <br />";
    echo "<br />";
    echo "Example<br />";

    $staedte = array(
        "Bangkok" => 90223230,
        "Berlin" => 2000000,
        "Elvis" => 1,
        "Key" => "Value"
    );

    echo "<ul>";
        foreach ($staedte as $key => $value) {
            echo "<li>{$key} : {$value}</li>";
        };
    echo "</ul>";

    echo "<br />";
    echo "Nachträglich hinzufügen<br />";


    $staedte["Dubai"] = "Zu viele Menschen";

    echo "<ul>";
        foreach ($staedte as $key => $value) {
        echo "<li>{$key} : {$value}</li>";
        };
    echo "</ul>";




 ?>


<?php
echo "<hr /> <br />";
echo "<h3>Isset, empty, unset in Arrays</h3> <br />";
echo "<br />";
echo "Example<br />";
echo "Beispiel Berlin - isset";
var_dump(isset($staedte["Berlin"]));
echo "<br />";
echo "Beispiel empty - Staedte Erray";
var_dump(empty($staedte));
echo "<br />";
echo "Beispiel empty - Staedte Berlin - sein Value";
var_dump(empty($staedte["Berlin"]));
echo "<br />";
echo "Unset";                   // löscht das Array oder gegebene Element
var_dump($staedte["Berlin"]);
echo "<br />";
unset($staedte["Berlin"]);
echo "<br />";
var_dump($staedte);
echo "<br />";

 ?>

<!-- Null und Unset -->

<?php
echo "<hr /> <br />";
echo "<h3>Null - Unset</h3> <br />";
echo "<br />";
echo "Example<br />";
$nullOrUnset = "Max";
$nullOrUnset = null;


var_dump(isset($nullOrUnset));      // gibt false, wäre es eine null wäre es true

 ?>

<!-- Arrays Verschachteln -->

<?php
echo "<hr /> <br />";
echo "<h3>Arrays verschachteln</h3> <br />";
echo "<br />";
echo "Example<br />";

    $thaiEssen = array("PadThai", "KhaoPad", "GhaiThod");
    $deutschEssen = array("KartoffelnUndKlöße", "Schweinebraten", "Rotkohl");

    $essKultur = array("Thai" => $thaiEssen, "Deutsch" => $deutschEssen);

    var_dump($essKultur);

    echo "<br />";
    echo "Example verschachtelte Liste ausgeben<br />";

    echo "<ul>";

        foreach ($essKultur as $region => $gerichte) {
            echo "<li>{$region}";
            echo "<ul>";
            foreach ($gerichte as $gericht) {
                echo "<li>{$gericht}</li>";
            }
            echo "</ul>";
            echo "</li>";


        }
    echo "</ul>";

 ?>

<!-- Kurzschreibweise Arrays -->

<?php
echo "<hr /> <br />";
echo "<h3>Kurz Schreibweise Arrays</h3> <br />";
echo "<br />";
echo "Example<br />";
    $kurzesArray = ["Laptop" => ["klein", "handlich"], "PC" => ["groß", "leistungsstark"]];

    var_dump($kurzesArray);

    echo "<br />";
    echo "Vorteile von Geräten! <br />";
    echo "<ul>";

    foreach ($kurzesArray as $geräte => $vorteile) {
        echo "<li>{$geräte}";
            echo "<ul>";
            foreach ( $vorteile as $vorteil) {
                echo "<li>{$vorteil}</li>";
            }
            echo "</ul>";
        echo "</li>";
    }

    echo "</ul>";


 ?>

<!-- Aufgabe - Arrays -->

<?php
echo "<hr /> <br />";
echo "<h3>Aufgabe Array</h3> <br />";


$kurzesArray = ["Laptop" => ["klein", "handlich"], "PC" => ["groß", "leistungsstark"]];

var_dump($kurzesArray);

echo "<br />";
echo "Vorteile von Geräten! <br />";
echo "<ul class='list-group'>";

foreach ($kurzesArray as $geräte => $vorteile) {
    echo "<li class='list-group-item list-group-item-secondary'>{$geräte}"; // secondary funktioniert nicht in bootstrap 3 :/
        echo "<ul class='list-group'>";
        foreach ( $vorteile as $vorteil) {
            echo "<li class='list-group-item '>{$vorteil}</li>";
        }
        echo "</ul>";
    echo "</li>";
}

echo "</ul>";

 ?>

<!-- Funktionen in PHP -->

<?php
    echo "<hr /> <br />";
    echo "<h3>Funktionen</h3> <br />";
    echo "<br />";
    echo "Example<br />";
    $geld = "Geld regiert die Welt! <br/>";
    function halloWelt($b) {
        echo " Fick dich, Welt! <br/>" . $b;
    }

    halloWelt($geld);
    halloWelt("<br />Wie sie mir gefällt! <br />");

    // Mit Rückgabewert

    function add4($int) {
        return $int += 4;
    }

    echo "Lösung ADD !: " . add4(6);

    function add($a, $b) {
        return $a + $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }

    echo "Lösung add: " . add(4,5) . "Lösung multiply: " . multiply(3,5);
    echo "Lösung kombi: ". multiply(add(3,4), 5);
 ?>


<!-- Global -->

<!-- hier gehts um scope. Parameter innerhalb der Funktionen können auf Variablen ausserhalb nicht einfach so zugreifen. Das bezeichnet man als Scope. "Global" ist eine option um das zu umgehen -->

<?php
echo "<hr /> <br />";
echo "<h3>Global</h3> <br />";
echo "<br />";
echo "Example<br />";

$ausserhalbVomScope = "Sven";

function derFunk() {
    global $ausserhalbVomScope; //... ist nun innerhalb vom Scope
    echo "Ich funktioniere mit globalen Variablen, {$ausserhalbVomScope}! Nicht schön, aber passiert.";
}

derFunk();

 ?>

<!-- Referenz vs. Wert -->

<?php
echo "<hr /> <br />";
echo "<h3>Referenz vs. Wert</h3> <br />";
echo "<br />";
echo "Example<br />";
echo "Variablen können innerhalb von Funktionen umgeschrieben werden. Das weißt du. <br />";


 ?>

<!-- -->

<?php
echo "<hr /> <br />";
echo "<h3>Referenz vs. Wert</h3> <br />";
echo "<br />";
echo "Example<br />";
echo "Mit &$ können Variablen in Funktionen so verändert werden, so dass sich die Variablen auch ausserhalb verändern. Sehr unschön, weil man nicht automatisch erkennen kann wie sie die Variable im Verlauf verändern könnte. In Dokumentationen wird dieses noch verwendet. Meistens als optionale Variable / Referenzwert.<br />";


 ?>

<!-- Standartparameter -->

<?php
echo "<hr /> <br />";
echo "<h3>Standartparameter</h3> <br />";
echo "<br />";
echo "Example<br />";

$mensch = "Mensch";

function parameter($mensch, $tier = "hund") {       //falls eine Variable beim aufrufen nicht gegeben ist kann man einen Standart definieren, der beim fehlen eingesetzt wird.
    echo "{$mensch}! Da wird der/die/das {$tier} in der Pfanne verrückt!";
}

parameter("Gurgel");
parameter("Gurgel", "Delfin");
 ?>


<!-- Rekursion -->

<?php
echo "<hr /> <br />";
echo "<h3>Rekursion</h3> <br />";
echo "<br />";
echo "Example<br />";

$rekA = "Mensch";

echo "Funktionen können sich selbst aufrufen bis zur unendlichkeit. Das ist rekursion. Das kann ohne Bedingung bis zum Fatal error führen, aber hat auch nützliche Funktionen. <br /> Man kann auch funktionen schreiben die terminiert ist. Beispiel: ";

function summe($x) {
    if ($x == 0) {
        echo "<br /> alles Gelöscht!" . $x;
        return 0;
    }
    return summe($x - 1) + $x;
}

echo "....". summe(100);

 ?>
