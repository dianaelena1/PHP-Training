<?php
// Tema suplimentare: 
// Faceti scrierea datelor dintr-un formular 
// :

// Nume , 
// Prenume
// Email 

// astfel incat sa ramana salvate toate inserarile nu doar una.

// E.g 
//  in fisier.json
// {
// nume: Marian
// prenume: Marco
// },
// {
// nume: Marcel
// prenume: Bulma
// }

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);

    $data = [
        "firstName" => $firstName,
        "lastName" => $lastName,
        "email" => $email,
    ];

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    $fileName = "data.json";

    //FILE_APPEND este o constantă utilizată în funcția file_put_contents pentru a specifica că datele ar trebui adăugate la sfârșitul fișierului existent, în loc să-l suprascrie.
    //PHP_EOL este o constantă predefinită în PHP și reprezintă un caracter de linie nouă, specific sistemului de operare pe care rulează serverul PHP. Aceasta este o modalitate portabilă de a adăuga un rând nou într-un fișier text.

    if (file_put_contents($fileName, $jsonData . PHP_EOL, FILE_APPEND)) {
        echo "Data was successfully saved into the file: " . $fileName;
    } else {
        echo "Unable to save data into file: " . $fileName;
    }
} else {
    header("Location: main.html");
}
?>