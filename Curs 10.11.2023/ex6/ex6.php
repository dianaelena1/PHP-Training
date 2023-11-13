<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    //if(isset($_POST[""]))
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);

    $data = [ 
        "1" => $firstName, 
        "lastName" => $lastName, 
        "email"  => $email 
    ];

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    $fileName = "data.json";

    if(file_put_contents($fileName, $jsonData)) {
        echo "Data was successfully saved into the file: ". $fileName;
        
    } else {
        echo "Unable to save data into file: ". $fileName;
    }
    
} else {
    header("Location: main.html" );
}

?>