<?php
// Folositi alte variabile globale , predefine de sistem php ($_)
// pentru a lua informati dintr-un formular.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nume = $_GET["nume"];
    $email = $_GET["email"];
}
?>
