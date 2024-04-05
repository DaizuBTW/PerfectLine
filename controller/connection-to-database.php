<?php
class Database
{
    private $pdo;

    public function __construct()
    {
        $this->connection();
    }

    private function connection()
    {
        $data = require_once "../model/data-array-for-database.php";
        $this->pdo = new PDO("mysql:host=$data[host];dbname=$data[nameDB];charset-$data[charset]", "$data[username]", "$data[password]");
        return $this;
    }

    public function prepare(string $sql)
    {
        $statement = $this->pdo->prepare($sql);
        return $statement;
    }

    public function execute($statement, ?array $params = null)
    {
        return $statement->execute($params);
    }

    public function query(string $sql)
    {
        $pdo = $this->pdo;
        $statement = $pdo->query($sql);
        return $statement;
    }
}

//  Временно
try {
    $dbh = new Database;
    foreach ($dbh->query('SELECT * from dictionary') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
