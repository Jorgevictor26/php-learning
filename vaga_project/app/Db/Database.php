<?php

namespace App\Db;

use \PDO;
use \PDOException;

class Database
{
    const HOST = 'localhost';
    const DBNAME = 'vagas';
    const USER = 'root';
    const PASS = 'P@ssword2026';

    private $table;
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }
    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::DBNAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $stmt = $this->connection->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    public function insert($values)
    {
        // DADOS DA QUERY
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        // MONTA A QUERY
        $query = 'INSERT INTO ' . $this->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

        // EXECUTA A QUERY
        $this->execute($query, array_values($values));

        // RETORNA O ID INSERIDO
        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null)
    {
        // DADOS DA QUERY
        $where = strlen($where) ? 'WHERE ' . $where : '';
        $order = strlen($order) ? 'ORDER BY ' . $order : '';
        $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

        // MONTA A QUERY
        $query = 'SELECT * FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        // EXECUTA A QUERY
        return $this->execute($query)->fetchAll(PDO::FETCH_ASSOC);
    }
}
