<?php

// CHECK IF UPLOAD SUCCESSFUL
if ($_FILES["uploadFile"]["error"] === UPLOAD_ERR_OK) {
    $fileName = $_FILES["uploadFile"]["name"];
    $currentPath = __DIR__;
    $uploadsDir = $currentPath . "/uploads/";
    $pathToFile = $uploadsDir . $fileName;

    // Check if file is present in a directory
    if (file_exists($pathToFile)) {
        echo "File exists!";
    } else {
        echo "No such file exists!";
    }

    // Move file to another directory
    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $pathToFile)) {
        echo "\"$fileName\" File was successfully uploaded to another directory.";
    } else {
        echo "Unable to upload file into another directory.";
    }

    // Check if file is present in a directory, if not move it
    if (file_exists($pathToFile)) {
        echo "File exists!";
    } else {
        if (!is_dir($uploadsDir)) {
            mkdir($uploadsDir, 0777, true);
        }
        echo "No such file exists, please upload it!";

        if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $pathToFile)) {
            echo "\"$fileName\" File was successfully uploaded to another directory.";
        } else {
            echo "Unable to upload file into another directory.";
        }
    }
}
?>
