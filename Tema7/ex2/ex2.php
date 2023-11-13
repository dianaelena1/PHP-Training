<?php
// Faceti un script care sa scrie intr-un json datele care vin dintr-un input de tip select.

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $selectedOption = htmlspecialchars($_POST["selectOption"]);

    $data = [ 
        "firstName" => $firstName, 
        "lastName" => $lastName, 
        "email"  => $email,
        "selectedOption" => $selectedOption
    ];

    print_r( $data );

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