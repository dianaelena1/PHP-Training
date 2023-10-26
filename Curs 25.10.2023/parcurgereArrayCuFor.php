<?php

$colorsSecond = [
    "1"  => "red",
    "2"  => "blue",
    "3"  => "green"
];

$keys = array_keys($colorsSecond);
$values = array_values($colorsSecond);

for ($i=0; $i < count($colorsSecond); $i++) {
    
    $key = $keys[$i];

    $value = $values[$i];

    echo "Chei" . $key . "Valori" . $value . "</br>";
}