<?php

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ipsam alias porro ipsa perspiciatis excepturi maxime sunt itaque. Provident explicabo blanditiis libero ipsa ab dignissimos quis repellat corrupti alias delectus.";
$length = strlen($text);
//echo $length;

$subsir = substr($text, 200, $length);
//echo $subsir;


function sum($a, $b){

    return $sum = $a + $b;
}

//echo "The sum is: " . sum(5,6);

function getTextPosition($needle){
    $trxt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempora sed eveniet magni modi commodi vero eos aspernatur itaque suscipit tempore ea facilis, laudantium nulla. Sunt, hic? Ut, voluptas sed.";
    $pozitie = strpos($trxt, $needle);

    return $pozitie;
}

//echo "The text position is: " . getTextPosition("dolor");

function replaceText($replaceTxt){
    $trxt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempora sed eveniet magni modi commodi vero eos aspernatur itaque suscipit tempore ea facilis, laudantium nulla. Sunt, hic? Ut, voluptas sed.";
    $newTxt = str_replace("dolor", $replaceTxt, $trxt);

    return $newTxt;
}

//echo "The new text is: " . replaceText("JAVA");

function setUpperText($text){
    $upperCase = strtoupper($text);

    return $upperCase ;
}

echo "The upper text is: " . setUpperText("java");

?>

