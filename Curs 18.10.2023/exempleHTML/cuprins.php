<!DOCTYPE html>
<html>
<head>
    <title>Curs PhP</title>
</head>
<nav>Menu</nav>

<!-- spargeti aceste fisier in 4 fisiere diferite si in incarcati in index
un fisier ptr head
un fisier main
un fisier lista
un fisier footer

-->

<body>
    <h1>Bine ați venit la pagina mea PHP</h1>
    <main>
        <ul>
            <li> a </li>
            <li> b </li>
            <li> c </li>
         </ul>
    </main>
    <?php
    // Aici puteți insera cod PHP pentru a genera conținut dinamic
    $mesaj = "Aceasta este o pagină generată dinamic folosind PHP.";
    echo "<p>" . $mesaj . "</p>";
    ?>
</body>
<footer> </footer>
</html>
