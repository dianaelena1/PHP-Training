<?php

// Realizati un formular de inscriere cu regex pentru urmatoarele campuri :

//     Nume, Parola, Oras(fara input text, vreau un array de orase macar 5,
//     forecch for), tip,m sau f
    
//     Pentru fiecare camp, validati daca e gol, 
//     si daca corect formatul.

$username = "";
$password = "";
$city = "";

$usernameErr = "";
$passwErr = "";
$cityErr = "";

// Verificare dacă există cerere POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function validateInputs($regex, $input) {
        return preg_match($regex, $input);
    }

    // Șabloane de validare pentru campuri
    $usernameRegex = "/^[a-zA-Z0-9_]{5,}$/";
    $passwordRegex = "/^[a-zA-Z0-9]{5,}$/"; 
    $cityOptions = array("Baia Mare", "Cluj-Napoca", "Piatra Neamt", "Brasov", "Bucuresti"); 

    // Username validation
    if (empty($_POST["username"])) {
        $usernameErr = "We need a username";
    } else {
        $username = $_POST["username"];
        if (!validateInputs($usernameRegex, $username)) {
            $usernameErr = "Invalid username format";
        }
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwErr = "We need a password";
    } else {
        $password = $_POST["password"];
        if (!validateInputs($passwordRegex, $password)) {
            $passwErr = "Invalid password format";
        }
    }

    // City validation
    if (empty($_POST["city"])) {
        $cityErr = "Please select a city";
    } else {
        $city = $_POST["city"];
        if (!in_array($city, $cityOptions)) { 
            $cityErr = "Invalid city selection";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Regex Tema</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="username" value="<?php echo $username; ?>"> 
        <span style="color:red"><?php echo $usernameErr; ?></span>
        <br><br>

        Password: <input type="password" name="password"> 
        <span style="color:red"><?php echo $passwErr; ?></span>
        <br><br>

        City: 
        <select name="city">
            <?php
            foreach ($cityOptions as $option) {
                echo "<option value=\"$option\" " . ($city == $option ? "selected" : "") . ">$option</option>";
            }
            ?>
        </select>
        <span style="color:red"><?php echo $cityErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>
