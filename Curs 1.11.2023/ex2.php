<?php

session_start(); //start session

$_SESSION["Utilizator"] = "WonderWoman";

$_SESSION["Email"] = "exemplu@email.com";

$_SESSION["Masina"] = "BMWAUDI";

$_SESSION["Food"] = "Pasta";

$_SESSION["Flowers"] = "Flower";


echo "<pre>";
var_dump("Acceseaza toate sesiunile: " . $_SESSION);
echo "</pre>";

var_dump("Accesare sesiune: " . $_SESSION["Utilizator"]);


//delete session

