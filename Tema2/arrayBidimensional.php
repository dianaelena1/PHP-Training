<?php

// Definiti un array bidimensional (definiti cheie si valoare, cu 3 randuri, 3 coloane) si parcuge-le.

$filme = [
    0 => [
        0 => 'Adventures',
        1 => 'Life of Story',
        2 => 'Mircea Cel Viteaza',
    ],
    1 => [
        0 => 'Adventures',
        1 => 'Life of Story',
        2 => 'Mircea Cel Viteaza',
    ],
    2 => [
        0 => 'Adventures',
        1 => 'Life of Story',
        2 => 'Mircea Cel Viteaza',
    ],
];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Rand $i, Coloana $j: " . $filme[$i][$j] . "\n";
    };
};