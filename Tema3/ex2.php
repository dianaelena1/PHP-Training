<!-- Folosind Variabila global $_GET , luati datele din url astfel incat daca in url varsta este egala cu 18, utilizatorul sa fie redirectionat catre emag.ro   -->

<?php
if (isset($_GET['varsta']) && $_GET['varsta'] == 18) {
    header('Location: http://www.emag.ro');
    exit;
} else {
    // afisaj
    echo "< 18 ani";
}


