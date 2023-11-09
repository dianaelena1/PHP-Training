<!-- Luati datele din formular , 
verificati daca parola este corecta, si daca este corecta userul sa fie directionat catre pagina logat.php-->
<!-- in logat php, doar afisati un un html basic , de preferat o imaginea cu un brackground   -->

<?php
if (isset($_POST['parola'])) {
    $parola_corecta = '000000'; 

    if ($_POST['parola'] == $parola_corecta) {
        echo "pass ok";
        exit;
    } else {
        echo "pass not ok";
    }
} else {
    echo "no pass provided";
}
?>
