<?php

// Folosind functii faceti un calculator, adunare, inmultire, impartire ,impartire cu rest,
// afisare rezultate.

function calculator($a, $b) {
    $sum = $a + $b;
    $product = $a * $b;
    $division = $a / $b;
    $remainder = $a % $b;

    return [
        'Adunare' => $sum,
        'Inmultire' => $product,
        'Impartire' => $division,
        'Impartire_cu_rest' => $remainder,
    ];
};

$result = calculator(1, 2);

print_r($result);
