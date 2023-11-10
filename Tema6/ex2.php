<?php
// Realizati un script de trimitere mailuri :

// Nume, prenume, destinatar din formalar.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $destinatar = $_POST["destinatar"];
    $mesaj = "Salut $nume $prenume,\n\nMulțumim pentru utilizarea serviciului nostru!";

    $subiect = "Salutare de la Site";
    $header = "From: webmaster@example.com"; 

    if (mail($destinatar, $subiect, $mesaj, $header)) {
        echo "E-mail trimis cu succes către $destinatar.";
    } else {
        echo "Eroare la trimiterea e-mailului.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trimitere E-mail</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nume: <input type="text" name="nume" required>
        <br><br>
        Prenume: <input type="text" name="prenume" required>
        <br><br>
        Destinatar: <input type="email" name="destinatar" required>
        <br><br>
        <input type="submit" name="submit" value="Trimite E-mail">
    </form>
</body>

</html>
