<?php

namespace app\models;

use app\database\Connection;

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

    public function GetTypeBusinessxId(int $id){
        $sql = "SELECT * FROM t102_mm_tipo_negocio WHERE f102_id = $id";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }

    public function GetxTypeBusinessxStatus(int $typeBusiness, string $status){
        $sql = "SELECT * FROM t200_mv_negocio 
        INNER JOIN t102_mm_tipo_negocio ON f200_id_tipo_negocio = f102_id
        WHERE f200_id_tipo_negocio = $typeBusiness AND f200_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }
}