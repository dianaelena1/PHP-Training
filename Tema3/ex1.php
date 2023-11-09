<!--  Folosind switch ,case, break -->
<!-- scrieti un script care sa ne redirectioneaza catre site ul therme .ro daca ziua curenta este vineri -->

<?php
$ziuaCurenta = date('N'); 

switch ($ziuaCurenta) {
    case 5: 
        header('Location: http://www.therme.ro'); 
        exit; 
        break;
    default:
        echo "Astăzi nu este vineri.";
}

