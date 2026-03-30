<?php

namespace app\controllers;

use app\models\BusinessModel;

class BusinessController{
    public function Show(){
        $businessModel = new BusinessModel();
        $business = $businessModel->GetxStatus('ACT');

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