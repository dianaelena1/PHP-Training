<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "utilizator_db";
    $password = "parola_db";
    $dbname = "filme";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Conexiune eșuată: " . $conn->connect_error);
    }

    $id_film = $_POST["id"];
    $titlu = $_POST["titlu"];
    $an = $_POST["an"];


    $sql = "UPDATE movies SET titlu='$titlu', an=$an WHERE id=$id_film";


    if ($conn->query($sql) === TRUE) {
        echo "Film actualizat cu succes!";
    } else {
        echo "Eroare la actualizarea filmului: " . $conn->error;
    }

    $conn->close();
}
?>
