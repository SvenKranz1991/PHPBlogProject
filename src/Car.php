
<?php
class Car implements DriveInterface {        // Klasse erstellen
    public function __construct($typ = "Auto", $name = "Name")  {   // Konstruktor mit Referenzwert
        $this->typ = $typ;
        $this->name = $name;
    }                       // Konstruktor
    public $typ;        // Eigenschaft erstellen
    public $name;

    public function drive($location = "auf der Straße.") {
        echo "<br /><p>Brumm Brumm {$this -> typ} {$this -> name} ...{$location}.</p><br />";       //Schreibweise mit This um auf Eigenschaften oder Methoden zuzugreifen. Javascript benutzt .
    }     // Methode erstellen
    private function nichtMitMirBro() {         // auf mich kann nicht von ausserhalb zugegriffen werden
        echo "<br /><p>Nicht mit mir Bro</p><br />";
    }

    public function tanken($liter) {
        echo "Getankt : {$liter}";
    }
}
// bei klassen schließendes php tag nicht verwenden um seiteneffekte vorzubeugen.
