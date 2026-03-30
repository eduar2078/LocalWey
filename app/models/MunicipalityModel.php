<?php
namespace app\models;

use app\database\Connection;

class MunicipalityModel{
    private $db;

    public function __construct(){
        $this->db = Connection::getInstance()->getConnection();
    }

    public function getxDepartmentxStatus(int $idDepartment, string $status){
        $sql = "SELECT * FROM t104_mm_municipio WHERE f104_id_departamento = $idDepartment AND f104_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }
}