<?php
class Database {
    //Парамаетры базы данных
    private $host = 'localhost';
    private $db_name = 'baserobots';
    private $username = 'root';
    private $password = '';
    private $conn;


//подключение к базе данных
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $ $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;

    }
}