<?php
class Database {
    private $host = 'localhost';
    private $username = 'mpitech';
    private $password = '94fmxyz##';
    private $database = 'api_teste';

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
?>
