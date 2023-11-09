<?php

$curl = curl_init();
curl_setopt_array($curl,
 [ CURLOPT_URL => "https://the-cocktail-db.p.rapidapi.com/search.php?s=vodka",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_ENCODING => "",
 CURLOPT_MAXREDIRS => 10,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "GET",
 CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: the-cocktail-db.p.rapidapi.com",
		 "X-RapidAPI-Key: a9obQNFsrnmshYvsHRzxYl4l9OgRp1tC3L4jsnv7eKTYBptRBH"],
]);
$response = curl_exec($curl);
 //var_dump($response);

$eroare=curl_error($curl);
// var_dump($eroare);
// var_dump($response);

//"drinks":[{"idDrink":"13196",
if($eroare){
    echo"Ai eroare de conectare! ".$eroare;
}
else{
    //var_dump($response);
   $raspuns_formatat=json_decode($response,true);
   $elemente=$raspuns_formatat;
    //var_dump($elemente);
    //var_dump($raspuns_formatat);
   //var_dump($raspuns_formatat["drinks"]);
  $elemente=$raspuns_formatat["drinks"];
    var_dump($elemente);
   //strDrink, strInstructions, strMeasure8, strGlass, strDrinkThumb
   foreach($elemente as $element){
        $idDrink=$element["idDrink"];
        $strDrink=$element["strDrink"];
        $strInstructions=substr($element["strInstructions"], 0, 20).'...';
        $strMeasure8=$element["strMeasure8"];
        $strGlass=$element["strGlass"];
        $strDrinkThumb=$element["strDrinkThumb"];

        echo "<div>";
        echo "id element: ".$idDrink."</br>";
        echo "strDrink: ".$strDrink."</br>";
        echo "strInstructions: ".$strInstructions."</br>";
        echo "strMeasure8: ".$strMeasure8."</br>";
        echo "strGlass: ".$strGlass."</br>";
        echo "strDrinkThumb: ".$strDrinkThumb."</br>";
        echo "<img src=$strDrinkThumb>";
        echo "</br>";
        echo "</div>";


        //echo "id element: ".$element["idDrink"]."</br>";
   }
   
   /*
   foreach($raspuns_formatat["drinks"] as $key => $value){
    echo $value["drinks"]; 
} */
}

?>

<html>
    <style>
        div{
            color: red;
            border-style: dotted;
            padding: 10px;
            margin: 10px;
        }
    </style>

</html>