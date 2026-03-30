<?php
namespace app\models;

use app\database\Connection;

class DepartmentModel{
    private $db;

    public function __construct(){
        $this->db = Connection::getInstance()->getConnection();
    }

    public function getxStatus(string $status){
        $sql = "SELECT * FROM t105_mm_departamento WHERE f105_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }
}