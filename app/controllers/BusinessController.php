<?php

namespace App\Controllers;

use App\Models\BusinessModel;

class BusinessController{
    public function ShowAll(){
        $businessModel = new BusinessModel();
        $business = $businessModel->GetxTypeBusinessxStatus($_GET["id"], 'ACT');

        require_once "app/views/content/business/index.php";
    }
}