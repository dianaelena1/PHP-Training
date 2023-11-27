<?php
// creati un script de actualizati informati pe baza unui id, ai 5 useri, ii spui id ul userului si datele care vrei sa le actualizezi

// Conect to db
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilizatori";

$conn = new mysqli($servername, $username, $password, $dbname);

// check connex
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// get and set data into db
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nume_nou = $_POST["nume"];
    $email_nou = $_POST["email"];
    $varsta_noua = $_POST["varsta"];

    // interogare SQL
    $sql = "UPDATE users
            SET nume='$nume_nou', email='$email_nou', varsta=$varsta_noua
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Informațiile utilizatorului au fost actualizate cu succes!";
    } else {
        echo "Eroare la actualizarea informațiilor utilizatorului: " . $conn->error;
    }
}

$conn->close();
?>
