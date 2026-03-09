<?php

namespace App\Database;

use PDO;
use PDOException;

class Connection{
    private static $instance = null;
    private $connection;

    private function __construct(){
        try{
            $dsn = "mysql:host=".HOST_DATABASE.";dbname=".NAME_DATABASE.";charset=utf8mb4";
            $this->connection = new PDO($dsn, USER_DATABASE, PWD_DATABASE);
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (PDOException $e){
            die("Error de conexión: " . $e->getMessage()); 
        }
    }

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }
}