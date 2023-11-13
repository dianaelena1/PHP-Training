<?php

$fileName = "newFile.txt";
$scriere = fopen($fileName, "w");
$citire = fopen($fileName, "r");

if (!$scriere || !$citire) {
    echo "Eroare la deschiderea fisierului.";
} else {
    if (!file_exists($fileName)) {
        touch($fileName);
    }

    if (filesize($fileName) <= 0) {
        $contentToWrite = "write this txt.";
        fwrite($scriere, $contentToWrite);
        echo "Fisierul '$fileName' a fost scris cu success!";

        echo "Te rog citeste fisierul.";
        $fileSize = filesize($fileName);
        if ($fileSize > 0) {
            $fileContent = fread($citire, $fileSize);
            echo "Continutul fisierului este: " . $fileContent . "<br>"; 
        } else {
            echo "Fisierul '$fileName' are dimensiunea zero.";
        }

        fclose($scriere);
        fclose($citire);
        
    } else {
        echo "Fisierul '$fileName' nu indeplineste conditia de dimensiune <= 0.";
    }
}
?>



