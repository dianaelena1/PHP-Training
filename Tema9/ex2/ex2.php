<?php
// Faceti un script care permita din interfata cu crud sincronizat cu baza de date..


// Sa poti face din formular inserarea unui film 
// sortea filmului
// editarea filmului curent, ai o lista de filme si cand dai edit sa editeze doar acel film
// stergerea filmului curent tot din interfata

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filme";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// Afiseaza lista de filme
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Titlu</th>
                <th>An</th>
                <!-- Adaugă aici alte coloane ale tabelului -->
                <th>Acțiuni</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["titlu"] . "</td>
                <td>" . $row["an"] . "</td>
                <!-- Adaugă aici alte coloane ale tabelului -->
                <td>
                    <a href='editare_film.php?id=" . $row["id"] . "'>Editare</a> |
                    <a href='stergere_film.php?id=" . $row["id"] . "'>Ștergere</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Nu există filme în baza de date.";
}


$conn->close();
?>
