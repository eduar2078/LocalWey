<?php

namespace app\controllers;

use app\models\BusinessModel;

class BusinessController{
    public function ShowAll(){
        $businessModel = new BusinessModel();
        $typeBusiness = $businessModel->GetTypeBusinessxId($_GET["id"]);
        $business = $businessModel->GetxTypeBusinessxStatus($_GET["id"], 'ACT');

        require_once "app/views/content/business/index.php";
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