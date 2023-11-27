<?php
// Faceti un formular care sa : permita  cautare, si ordonare ,crescatoare,descretoare pentru :

//     o  tabele melodii , cu coloanele :
//     id ,
//     nume,
//     album 
    
    
//     Sa sorteze crescator din interfata din formular melodiile 
    
//     Sa cauti melodiile cu titlul la mare
    
    
//     Adaugati 10 melodi cu titluri diferite


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "melodii";

$conn = new mysqli($servername, $username, $password, $dbname);

// check conn
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// get and print data
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $criteriu_ordonare = $_GET["criteriu_ordonare"];
    $cuvant_cautare = $_GET["cuvant_cautare"];

    // interogare SQL
    $sql = "SELECT * FROM melodii";

    if (!empty($cuvant_cautare)) {
        $sql .= " WHERE UPPER(nume) LIKE UPPER('%$cuvant_cautare%')";
    }

    switch ($criteriu_ordonare) {
        case 'nume_crescator':
            $sql .= " ORDER BY nume ASC";
            break;
        case 'nume_descrescator':
            $sql .= " ORDER BY nume DESC";
            break;
        case 'album_crescator':
            $sql .= " ORDER BY album ASC";
            break;
        case 'album_descrescator':
            $sql .= " ORDER BY album DESC";
            break;
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nume</th>
                    <th>Album</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nume"] . "</td>
                    <td>" . $row["album"] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Nu au fost găsite melodii conform criteriilor specificate.";
    }
}

$conn->close();
?>
