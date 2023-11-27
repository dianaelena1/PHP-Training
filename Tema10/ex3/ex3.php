<?php
// Realizati din interfata, un script care sa permita sortarea a 10 utilizatori dupa varsta, fara a folosi input text, folosi 

// https://getbootstrap.com/docs/5.3/forms/range/#overview

// P.s cine foloseste grafica de la botstrap are puncte bonus, cine nu , il vom arata intr-o sedinta

        $utilizatori = [
            ['nume' => 'Utilizator1', 'varsta' => 25],
            ['nume' => 'Utilizator2', 'varsta' => 30],
            ['nume' => 'Utilizator3', 'varsta' => 22]
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $varstaSelectata = $_POST['varsta'];

            // Filtrare utliz
            $utilizatoriFiltrati = array_filter($utilizatori, function ($utilizator) use ($varstaSelectata) {
                return $utilizator['varsta'] >= $varstaSelectata;
            });

            // sort by age
            usort($utilizatoriFiltrati, function ($a, $b) {
                return $a['varsta'] - $b['varsta'];
            });

            // Afisare sorted employees
            echo '<h4 class="mt-3">Utilizatori Sortați După Vârstă</h4>';
            echo '<ul>';
            foreach ($utilizatoriFiltrati as $utilizator) {
                echo '<li>' . $utilizator['nume'] . ' - ' . $utilizator['varsta'] . ' ani</li>';
            }
            echo '</ul>';
        }
        ?>

    </div>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8t+ua/Ci8PK6+1YllJS84PW+9W8U8F8e+0zIjc9aaXofd4UmpY5s83GzFY9U" crossorigin="anonymous"></script>
  </body>
  </html>
  
?>