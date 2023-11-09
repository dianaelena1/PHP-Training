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
   $raspuns_formatat=json_decode($response,true);
   //var_dump($raspuns_formatat["drinks"]);
   
   foreach($raspuns_formatat["drinks"] as $drink){
    echo $drink["13196"];
}
}

