<?php
// Realizati un script care sa preaia toate tabelele din baza de date mysq sample 

// https://www.mysqltutorial.org/how-to-load-sample-database-into-mysql-database-server.aspx

//  vezi download button , sau ruleaza query-ul cel mare cu totul codul

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

    public function getTables()
    {
        try {
            $query = "SHOW TABLES";
            $statement = $this->pdo->prepare($query);
            $statement->execute();

            $tables = $statement->fetchAll(PDO::FETCH_COLUMN);

            return $tables;
        } catch (PDOException $e) {
            die("Eroare la preluarea tabelelor: " . $e->getMessage());
        }
    }
}

$host = "localhost";
$username = "";
$password = "";
$database = "sample";

$databaseManager = new DatabaseManager($host, $username, $password, $database);
$tables = $databaseManager->getTables();

echo "Tabelele din baza de date {$database}:\n";
foreach ($tables as $table) {
    echo $table . "\n";
}


?>