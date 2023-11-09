<?php

//Defineste un array cu cheie si valoare

$plante = [
    0 => "trandafir",
      "floarea soarelui",
    2 => "bujori"
];

//var_dump('Afisare fara pre: ' . $plante);

echo '<pre>';

print_r($plante);

echo '</pre>';

//var_dump('Afisare formatata: ' . '<pre>' . $plante . '</pre>');
//var_dump("Floarea: " . $plante); //eroare ptr ca fol. un str in var_dump ptr array