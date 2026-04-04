<?php

namespace app\models;

use app\database\Connection;

class BusinessModel{
    private $db;

    public function __construct(){
        $this->db = Connection::getInstance()->getConnection();
    }
    /**
     * Filtro
     */
    public function GetTypeBusinessxStatus(string $status){
        $sql = "SELECT * FROM t102_mm_tipo_negocio WHERE f102_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }

    public function GetNeighborhoodsxIdMunicipalityxStatus(int $idMunicipality, string $status){
        $sql = "SELECT * FROM t106_mm_corregimiento_barrio 
        WHERE f106_id_municipio = $idMunicipality AND f106_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }
    /**
     * Encabezado listado de negocios
     */
    public function GetTotalxIdMunicipality(int $id){
        $sql = "SELECT COUNT(*) as Total FROM t200_mv_negocio WHERE f200_id_municipio = $id";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }
    /**
     * Crear negocio -- ADMINISTRADOR
     */
    public function SetBusiness(array $params){
        $sql = "INSERT INTO t200_mv_negocio (`f200_id_cliente`,
            `f200_nombre`,
            `f200_descripcion`,
            `f200_id_municipio`,
            `f200_id_corregimiento_barrio`,
            `f200_direccion`,
            `f200_id_tipo_negocio`,
            `f200_imagen_portada`,
            `f200_imagen_principal`,
            `f200_id_estado`) VALUES (".$params["id-client"].",
            '".$params["name-business"]."',
            '".$params["description"]."',
            ".$params["id-municipality"].",
            ".$params["id-neighborhood"].",
            '".$params["address"]."',
            ".$params["id-type-business"].",
            '".$params["image-front-page"]."',
            '".$params["image-major"]."',
            '".$params["status"]."'
            )";
        $stmt = $this->db->query($sql);
        return $stmt;
    }
    /**
     * Listado de negocios en vista de usuario
     */
    public function GetxIdMunicipalityxStatus(int $id, string $status){
        $sql = "SELECT * FROM t200_mv_negocio 
        INNER JOIN t102_mm_tipo_negocio ON f200_id_tipo_negocio = f102_id
        WHERE f200_id_municipio = $id AND f200_id_estado = '$status'";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }




    public function GetxId(int $id){
        $sql = "SELECT * FROM t200_mv_negocio 
        INNER JOIN t102_mm_tipo_negocio ON f200_id_tipo_negocio = f102_id
        WHERE f200_id = $id";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }

    public function GetGalleryxIdBusiness(int $id){
        $sql = "SELECT * FROM t201_mv_galeria WHERE f201_id_negocio = $id";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }

    public function GetAll(){
        $sql = "SELECT * FROM t200_mv_negocio INNER JOIN t101_mm_cliente ON f200_id_cliente = f101_id";
        $stmt = $this->db->query($sql);
        return $stmt->fetchall();
    }

    
}