<?php
// connect to db
$servername = "localhost";
$username = "utilizator_db";
$password = "parola_db";
$dbname = "filme";

$conn = new mysqli($servername, $username, $password, $dbname);

// check conn
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// Prelucrare și sortare filme
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $criteriu_sortare = $_GET["criteriu_sortare"];

    //  interogare SQL
    $sql = "SELECT * FROM movies";

    switch ($criteriu_sortare) {
        case 'titlu_crescator':
            $sql .= " ORDER BY titlu ASC";
            break;
        case 'titlu_descrescator':
            $sql .= " ORDER BY titlu DESC";
            break;
        case 'an_crescator':
            $sql .= " ORDER BY an ASC";
            break;
        case 'an_descrescator':
            $sql .= " ORDER BY an DESC";
            break;
      
    }

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
        echo "Nu au fost găsite filme conform criteriilor specificate.";
    }
}

$conn->close();
?>
