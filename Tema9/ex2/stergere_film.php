<?php
$servername = "localhost";
$username = "utilizator_db";
$password = "parola_db";
$dbname = "filme";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_film = $_GET["id"];

    $sql = "DELETE FROM movies WHERE id = $id_film";

    if ($conn->query($sql) === TRUE) {
        echo "Film șters cu succes!";
    } else {
        echo "Eroare la ștergerea filmului: " . $conn->error;
    }
}


$conn->close();
?>
