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
    public $score;
    public $mpaRatingTable = [
        [
            'ratingCode' => 'G',
            'meaning' => 'General Audiences',
            'description' => 'All ages admitted. Nothing that would offend parents for viewing by children.',
        ],
        [
            'ratingCode' => 'PG',
            'meaning' => 'Parental Guidance Suggested',
            'description' => 'Some material may not be suitable for children. Parents urged to give "parental guidance". May contain some material parents might not like for their young children.',
        ],
        [
            'ratingCode' => 'PG-13',
            'meaning' => 'Parents Strongly Cautioned',
            'description' => 'Some material may be inappropriate for children under 13. Parents are urged to be cautious. Some material may be inappropriate for pre-teenagers.',
        ],
        [
            'ratingCode' => 'R',
            'meaning' => 'Restricted',
            'description' => 'Under 17 requires accompanying parent or adult guardian. Contains some adult material. Parents are urged to learn more about the film before taking their young children with them.',
        ],
        [
            'ratingCode' => 'NC-17',
            'meaning' => 'Adults Only',
            'description' => 'No One 17 and Under Admitted. Clearly adult. Children are not admitted.',
        ],
    ];

    public function __construct($title, $year)
    {
        $this->title = $title;
        $this->year = $year;
    }

    // public function ageWarning($yearRating)
    // {
    //     if ( ) {
    //         # code...
    //     }
    // }
}

// movie-1
$movie = new Movie('Starship Troopers', 1997);
$movie->title = 'Starship Troopers';
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
$movie->score = 7.2;
$movie->rating = 'R';

// movie-2
$movie2 = new Movie('Tremors', 1990);
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
$movie2->score = 7.1;
$movie2->rating = 'PG-13';

var_dump($movie);
var_dump($movie2);



