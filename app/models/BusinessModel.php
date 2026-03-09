<?php

namespace App\Models;

use App\Database\Connection;

class BusinessModel{
    private $db;

    public function __construct(){
        $this->db = Connection::getInstance()->getConnection();
    }

    public function GetTypeBusinessxStatus(string $status){
        $sql = "SELECT * FROM t102_mm_tipo_negocio WHERE f102_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }

    public function GetxTypeBusinessxStatus(int $typeBusiness, string $status){
        $sql = "SELECT * FROM t200_mv_negocio 
        WHERE f200_id_tipo_negocio = $typeBusiness AND f200_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }
}