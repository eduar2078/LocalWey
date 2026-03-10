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
}