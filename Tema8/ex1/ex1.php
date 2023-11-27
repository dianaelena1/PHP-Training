<?php

// realizati un script care sa adaugi date din formular din baza de date
// ca si exemplu creati un tabelul movies
// cu coloane: id, titlu, an, actori, regizor, locatie, descriere, rating, nr_vizitatori

// Conectare to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filme";

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Conexiune esuata: " . $conn->connect_error);
    echo "Succes!";
}

// get and add data into the db
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titlu = $_POST["titlu"];
    $an = $_POST["an"];
    $actori = $_POST["actori"];
    $regizor = $_POST["regizor"];
    $locatie = $_POST["locatie"];
    $descriere = $_POST["descriere"];
    $rating = $_POST["rating"];
    $nr_vizitatori = $_POST["nr_vizitatori"];

    // interogare sql
    $sql = "INSERT INTO filme (titlu, an, actori, regizor, locatie, descriere, rating, nr_vizitatori)
            VALUES ('$titlu', $an, '$actori', '$regizor', '$locatie', '$descriere', $rating, $nr_vizitatori)";

    if ($conn->query($sql) === TRUE) {
        echo "Film adăugat cu succes!";
    } else {
        echo "Eroare la adăugarea filmului: " . $conn->error;
    }
}


$conn->close();
?>

