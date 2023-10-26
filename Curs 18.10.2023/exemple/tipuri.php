<?php
//-----------------------------------------------------------
//Folosind var dump afisati trei tipuri de variabile diferite

$intVar = 42;
$stringVar = "Hello, world!";
$arrayVar = array(1, 2, 3);

//afisaj
var_dump($intVar);
var_dump($stringVar);
var_dump($arrayVar);

//-----------------------------------------------------------
//Definiti 2 variabile care sa nu fie de tip real, intreg, string

$esteAdevărat = true;
$arrayDeNumere = array(1, 2, 3, 4, 5); 

//afisaj
var_dump($esteAdevărat);
var_dump($arrayDeNumere);

//-----------------------------------------------------------
//Afisati data curenta
$dataCurenta = date("m/d/Y");

//afisaj
echo "Data curentă este: " . $dataCurenta;