<?php
// var_dump($cookie);
$c = setcookie("DenumireSesiuni", "Horatiu", time()+86400, "/");
$cookie = $_COOKIE;

if (isset($_COOKIE)) {
    echo "sesiune exista";
} else {
    // $numeUtilizator = $_COOKIE["DenumireSesiuni"];
    echo "sesiune nu exista";
}

$citire = $_COOKIE["DenumireSesiuni"];

$c = setcookie("DenumireSesiuni", "Horatiu", time()-86400, "/");

// var_dump($cookie);
// var_dump($c);
// var_dump($citire);