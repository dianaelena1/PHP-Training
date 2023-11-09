<?php

// Folosind Filtre , Define de limbaj , validati ca parola nu este de tip string 
// Folosind Filtre, validati ca user name ul nu este de tip intreg 

$password = "parola123";

if (!filter_var($password, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => "/^[0-9]+$/"]])) {
    echo "Parola este valida.";
} else {
    echo "Parola este invalida.";
}

$username = "john_doe";

if (!filter_var($username, FILTER_VALIDATE_INT)) {
    echo "Username-ul este valid.";
} else {
    echo "Username-ul este invalid.";
}

?>