<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file Movie.php in cui:
- è definita una classe ‘Movie’
=> all’interno della classe sono dichiarate delle variabili d’istanza
=> all’interno della classe è definito un costruttore
=> all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie {
    public $title;
    public $year;
    public $director;
    public $cast;
    public $genre;
    public $rating;
}

$movie = new Movie();
$movie->title = 'Starship Troopers - Fanteria dello spazio';
$movie->year = 1997;
$movie->director = 'Paul Verhoeven';
$movie->cast = [
    'Casper Van Dien',
    'Neil Patrick Harris',
    'Denise Richards',
    'Dina Meyer'
];
$movie->genre = [
    'action',
    'sci-fi'
];
$movie->rating = 7.2;

$movie2 = new Movie();
$movie2->title = 'Tremors';
$movie2->year = 1990;
$movie2->director = 'Ron Underwood';
$movie2->cast = [
    'Kevin Bacon',
    'Fred Ward',
    'Finn Carter',
    'Michael Gross',
    'Reba McEntire'
];
$movie2->genre = [
    'horror',
];
$movie2->rating = 7.1;

var_dump($movie);
var_dump($movie2);



