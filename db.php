<?php
// IMPORTIAMO UNA E UNA SOLA VOLTA IL FILE CONTENTE LA CLASSE 
require_once __DIR__ . '/Models/Movie.php';

//------------------------------------------------------
$movies = [
    new Movie('Avatar', ['fantasy', 'action'], 243),
    new Movie('GoodFellas', ['drammatic', 'action'], 263),
    new Movie('Titanic', ['love', 'drammatic'], 190),
    new Movie('Spideman', ['fantasy', 'action'], 178),
    new Movie('Superman', ['fantasy', 'action'], 190),
    new Movie('Scream', ['fantasy', 'horror'], 210),
];