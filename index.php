<?php

class Movie {
    // creazione variabili istanza
    public $title;
    public $genre;
    public $releaseYear;

    public function __construct($title, $genre, $releaseYear) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
    }

    // funzione per stampare le informazioni del film
    public function printInfo() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Genere: " . $this->genre . "<br>";
        echo "Anno di uscita: " . $this->releaseYear . "<br>";
        echo "<br>";
    }
}

// Creazione di due oggetti Movie
$movie1 = new Movie("Shutter Island", "Thriller", 2010);
$movie2 = new Movie("Inception", "Sci-Fi", 2010);

// Stampare i film con le relative informazioni
echo "<h2>Film 1:</h2>";
$movie1->printInfo();

echo "<h2>Film 2:</h2>";
$movie2->printInfo();
