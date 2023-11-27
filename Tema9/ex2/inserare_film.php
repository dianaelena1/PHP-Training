<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // connect to db
    $servername = "localhost";
    $username = "utilizator_db";
    $password = "parola_db";
    $dbname = "filme";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connex
    if ($conn->connect_error) {
        die("Conexiune eșuată: " . $conn->connect_error);
    }

    // get and insert data into db
    $titlu = $_POST["titlu"]; // Adaugă aici câmpurile pentru inserare
    $an = $_POST["an"];


    $sql = "INSERT INTO movies (titlu, an) VALUES ('$titlu', $an)"; 

    if ($conn->query($sql) === TRUE) {
        echo "Film adăugat cu succes!";
    } else {
        echo "Eroare la adăugarea filmului: " . $conn->error;
    }

    $conn->close();
}
?>
