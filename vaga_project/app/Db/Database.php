<?php

use PDO;

class Database
{
    const HOST = 'localhost';
    const DBNAME = 'vagas';
    const USER = 'root';
    const PASS = 'P@SSWORD2026';
    private $table;
    private $connection;

    public function __construct($table)
    {
        $this->table = $table;
        $this->setConnection();
    }
    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DBNAME, self::USER, self::PASS);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }
}
