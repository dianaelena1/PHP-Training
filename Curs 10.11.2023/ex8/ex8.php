<?php
$directoryName= "new_folder";

if(!file_exists($directoryName)){
    if(mkdir($directoryName)){
        echo "Directul nou a fost creat ". $directoryName;

    } else {
        echo "Unable to create folder.";
    }

} else {
    echo "The director: '$directoryNamealready' exists.";

}
?>