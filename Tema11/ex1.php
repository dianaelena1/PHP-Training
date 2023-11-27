<?php
// Realizati un script care sa preaia toate bazele de date ale unei conextiuni mysql .

// P.s Folositi PDO, CLASe , MySQl

class DatabaseManager
{
    private $host;
    private $username;
    private $password;
    private $pdo;

    public function __construct($host, $username, $password)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    private function connect()
    {
        try {
            $dsn = "mysql:host={$this->host};charset=utf8mb4";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Eroare de conectare la baza de date: " . $e->getMessage());
        }
    }

    public function getDatabases()
    {
        try {
            $query = "SHOW DATABASES";
            $statement = $this->pdo->prepare($query);
            $statement->execute();

            $databases = $statement->fetchAll(PDO::FETCH_COLUMN);

            return $databases;
        } catch (PDOException $e) {
            die("Eroare la preluarea bazelor de date: " . $e->getMessage());
        }
    }
}

$host = "localhost";
$username = "root";
$password = "";

$databaseManager = new DatabaseManager($host, $username, $password);
$databases = $databaseManager->getDatabases();

echo "Bazele de date disponibile:\n";
foreach ($databases as $database) {
    echo $database . "\n";
}

?>