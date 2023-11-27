<?php
// Realizati o aplicatie care sa  permita sortarea angajatilor dupa  salariul mai mare de 2000 de lei , si varsta mai mare de 35 de ani.

// P.s actualizati query-ul din interfata web , preluand datele din baza de date si afisand tot acolo.

// Un select, cu date dinamice din formular

// E.g tableul angajati  cu coloanele:

// id, 
// nume,
// prenume,
// salariu, 
// varsta

// Conectare to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

try {
    $dsn = "mysql:host=" . "localhost" . ";
    port=" . 3306 . ";
    dbname=" . "movies";

    $this->pdo = new PDO($dsn, "root", '');

    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Connection failed: " . $e->getMessage());
}

class Employees {
    public $employees = [];

    public function fetchEmployees($minSalary, $minAge) {
        global $db;

        $query = "SELECT * FROM angajati WHERE salariu > :minSalary AND varsta > :minAge";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':minSalary', $minSalary, PDO::PARAM_INT);
        $stmt->bindParam(':minAge', $minAge, PDO::PARAM_INT);
        $stmt->execute();

        $this->employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sortEmployees() {
        // sort empl by desc order
        usort($this->employees, function ($a, $b) {
            return $b['salary'] - $a['salary'];
        });
    }

    public function getEmployees() {
        return $this->employees;
    }
}

$employeeManager = new Employees();
$employeeManager->fetchEmployees(2000, 35);
$employeeManager->sortEmployees();
$sortedEmployees = $employeeManager->getEmployees();
?>
