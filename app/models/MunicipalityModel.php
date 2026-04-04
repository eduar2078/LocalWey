<?php
namespace app\models;

use app\database\Connection;

class MunicipalityModel{
    private $db;

    public function __construct(){
        $this->db = Connection::getInstance()->getConnection();
    }
    // Obtener municipios por departamento y estado
    public function GetxDepartmentxStatus(int $idDepartment, string $status){
        $sql = "SELECT * FROM t104_mm_municipio WHERE f104_id_departamento = $idDepartment AND f104_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }
    // Obtener corregimientos o barrios segun municipio seleccionado
    public function GetNeighborhoodsxIdMunicipalityxStatus(int $idMunicipality, string $status){
        $sql = "SELECT * FROM t106_mm_corregimiento_barrio
        WHERE f106_id_municipio = $idMunicipality AND f106_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }
    // 
    public function getxStatus(string $status){
        $sql = "SELECT * FROM t104_mm_municipio 
        INNER JOIN t105_mm_departamento ON f104_id_departamento = f105_id
        WHERE f104_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }

    public function GetxId(int $id){
        $sql = "SELECT * FROM t104_mm_municipio 
        INNER JOIN t105_mm_departamento ON f104_id_departamento = f105_id
        WHERE f104_id = $id";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }
}