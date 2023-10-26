<?php

// Definiti un array bidimensional (definiti cheie si valoare, cu 3 randuri, 3 coloane) si parcuge-le.

$filme = [
    0 => [
        0 => 'Lord of the rings',
        1 => 'House MD',
        2 => 'Game of thrones',
    ],
    1 => [
        0 => 'Harry Potter',
        1 => 'Euphoria',
        2 => 'The Hobbit',
    ],
    2 => [
        0 => 'Matrix',
        1 => 'Iron Man',
        2 => 'Bohemian Rapsody',
    ],
];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Rand $i, Coloana $j: " . $filme[$i][$j] . "\n";
    };
};