<?php
// Realizati un script care sa preaia dintro baza de date structura tabelelor.

// Exemplu 

// pentru baza de date 

// mysample , tabele employee sa arata coloana si tipul datel , gen id intreg, name string

// P.s Folositi PDO, CLASe , MySQl

class DatabaseManager
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $pdo;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    private function connect()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8mb4";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Eroare de conectare la baza de date: " . $e->getMessage());
        }
    }

    public function getTableStructure($tableName)
    {
        try {
            $query = "DESCRIBE {$tableName}";
            $statement = $this->pdo->prepare($query);
            $statement->execute();

            $columns = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $columns;
        } catch (PDOException $e) {
            die("Eroare la preluarea structurii tabelului {$tableName}: " . $e->getMessage());
        }
    }
}


$host = "localhost";
$username = "root";
$password = "";
$database = "mysample";
$tableName = "employee";

$databaseManager = new DatabaseManager($host, $username, $password, $database);
$tableStructure = $databaseManager->getTableStructure($tableName);

echo "Structura tabelului {$tableName} din baza de date {$database}:\n";
foreach ($tableStructure as $column) {
    echo "{$column['Field']} {$column['Type']}\n";
}

?>