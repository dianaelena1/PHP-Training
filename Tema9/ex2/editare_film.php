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

    $sql = "SELECT * FROM movies WHERE id = $id_film";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titlu = $row["titlu"];
        $an = $row["an"];

        echo "<h3>Editare Film</h3>
              <form action='actualizare_film.php' method='post'>
                <input type='hidden' name='id' value='$id_film'>
                Titlu: <input type='text' name='titlu' value='$titlu'><br>
                An: <input type='number' name='an' value='$an'><br>
                <!-- Adaugă aici câmpurile de editare -->

                <input type='submit' value='Actualizare Film'>
              </form>";
    } else {
        echo "Filmul cu ID-ul $id_film nu a fost găsit.";
    }
}

$conn->close();
?>
