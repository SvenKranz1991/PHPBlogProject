
<?php
    class SuperCar extends Car {
        public function __construct($typ, $name, $schnelligkeit) {
            parent::__construct($typ, $name);       // Konstruktor vom Parent ausführen und Variablen übergeben
            $this -> schnelligkeit = $schnelligkeit;
        }
        public function drive($location = "auf dem Asphalt.") {
            echo "<br /><p>Brumm Brumm {$this -> typ} {$this -> name} ...{$location}.</p><br />";       // überschreiben von Methoden von der Parent Klasse
        }
        public $schnelligkeit;
    }
// bei klassen schließendes php tag nicht verwenden um seiteneffekte vorzubeugen.
