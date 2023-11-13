<?php
// Realizati un script care sa afiseze un paragraf
// cu litera Mica Primul cuvant si al propozitiei si sa puna dinamic numele tau dintr-o variabila la inceputul randului.

function makeFirstWordUpper($name) {
    $firstName = ucfirst($name);

    echo $firstName . " am fost la munte si nu mi-a placut";
}


makeFirstWordUpper("Marian");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercitiul 1</title>
</head>
<body>
    <p><?php makeFirstWordUpper("Marian"); ?></p>
</body>
</html>
