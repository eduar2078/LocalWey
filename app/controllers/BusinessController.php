<?php

namespace app\controllers;

use app\models\BusinessModel;
use app\models\MunicipalityModel;

class BusinessController{
    private $businessModel;
    private $municipalityModel;

    public function Show(){
        $this->businessModel = new BusinessModel();
        $this->municipalityModel = new MunicipalityModel();
        // Filtros
        $typeBusinessEnableds = $this->businessModel->GetTypeBusinessxStatus('ACT');
        $neighborhoodsEnableds = $this->businessModel->GetNeighborhoodsxIdMunicipalityxStatus($_GET["id"], 'ACT');
        // Encabezado de listado de negocios
        $location = $this->municipalityModel->GetxId($_GET["id"]);
        $totalBusiness = $this->businessModel->GetTotalxIdMunicipality($_GET["id"]);
        // Listado de negocios
        $business = $this->businessModel->GetxIdMunicipalityxStatus($_GET["id"], 'ACT');
        require_once "app/views/content/business.view.php";
    }

    public function GetInfoxId(){
        header('Content-Type: application/json');
        $businessModel = new BusinessModel();
        $results = [
            "Information" => $businessModel->GetxId($_GET["id"]),
            "Gallery" => $businessModel->GetGalleryxIdBusiness($_GET["id"])
        ];
        echo json_encode($results);
    }
}