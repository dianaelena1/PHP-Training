<?php

$username = "";
$email = "";
$cell = "";
$gen = "";

$usernameErr = "";
$emailErr = "";
$cellErr = "";
$genErr = "";

//verificare daca exista cerere POST
if($_SERVER["REQUEST_METHOD"] == "POST"){ // "$_SERVER" preia datele de la server 

    function validateInputs($regex, $input){
        return preg_match($regex, $input);
    }

    //sabloane validare campuri
    $usernameRegex = "/^[a-zA-Z0-9_]{5,}$/";
    $emailRegex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $cellRegex = "/^\d{10,}$/";
    $genRegex = "/^(male|female|other)$/i";

    //username validation
    if (empty($_POST["username"])){
        $usernameErr="We need a username";
    } else {
        $username = $_POST["username"];
        if(!validateInputs($usernameRegex, $username)){
            $usernameErr="Invalid username Format";
        }
    }

    //email validation
    if (empty($_POST["email"])){
        $emailErr="We need an email";
    } else {
        $email = $_POST["email"];
        if(!validateInputs($emailRegex, $email)){
            $emailErr="Invalid Email Format";
        }
    }

    //cell validation
    if (empty($_POST["cell"])){
        $cellErr="We need an cell";
    } else {
        $cell = $_POST["cell"];
        if(!validateInputs($cellRegex, $cell)){
            $cellErr="Invalid Cell Format";
        }
    }

    //gen validation
    if (empty($_POST["gen"])){
        $genErr="We need a gen";
    } else {
        $gen = $_POST["gen"];
        if(!validateInputs($genRegex, $gen)){
            $genErr="Invalid Gen Format";
        }
    }
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="username"> </input>
                    <span style="color:red"><?php echo $usernameErr;?></span>
                    <br><br>
                 
        Email: <input type="text" name="email"> </input>
                 <span style="color:red"><?php echo $emailErr;?></span>
                 <br><br>
        Cell: <input type="text" name="cell">  </input>
                <span style="color:red"><?php echo $cellErr;?></span>
                <br><br>

        Gen: <input type="radio" name="gen" value="male"> Male  </input>
             <input type="radio" name="gen" value="male"> Female  </input>
             <input type="radio" name="gen" value="male"> Other  </input>
                <span style="color:red"><?php echo $genErr;?></span>
                <br><br>

            <input type = "submit" name="submit" value = "Submit"> </input>
    </form>
    
</body>
</html>