<?php

// faceti un script care sa permita salvarea unui poze dintr-un (anumit input de html) si limitati dimensiunea "uploadului" la 2MB
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_FILES["fileToUpload"])) {
        $file = $_FILES["fileToUpload"];
    
        // check dim
        if ($file["size"] <= 2 * 1024 * 1024) { // 2MB
            $targetDir = "../Teme/Tema4/ex3/media"; 
            $targetFile = $targetDir . basename($file["name"]);

            // Mută fișierul încărcat în directorul specificat
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                echo "Fișierul a fost încărcat cu succes.";
            } else {
                echo "Eroare la salvarea fișierului. Fisier prea mare.";
            }
        } else {
            echo "Fișierul depășește dimensiunea maximă acceptată (2MB).";
        }
    }
}
?>