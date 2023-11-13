<?php

$fileName = "data.txt";

$file = fopen($fileName, 'w');

if($file){
    fwrite($file, 'JAVA');
    echo "File was successfully open: ". $file;
    fclose($file);

} else {

    echo "File was not successfully open";
}

?>