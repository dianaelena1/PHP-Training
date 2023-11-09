<?php
// Validati Un formular de uplaod si verificati daca utilizatorul nu trimite altceva decat fisier cu extensia .pdf,

// Daca trimite fisiere cu extensia jpg, redirectionat pe google.com 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $allowedExtensions = ['pdf'];
    $uploadDirectory = '../Teme/Tema5/ex3/files';

    if (isset($_FILES['fileToUpload'])) {
        $file = $_FILES['fileToUpload'];

        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);

        if (in_array($fileExtension, $allowedExtensions)) {
            echo "Uploading file in progress...";
        } elseif ($fileExtension === 'jpg') {
            header("Location: https://www.google.com");
            exit;
        } else {
            echo "Invalid file extension. Only .pdf files are allowed.";
        }
    }
}
?>

