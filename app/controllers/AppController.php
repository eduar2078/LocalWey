<?php
namespace app\controllers;

use App\Models\BusinessModel;

class AppController{
    public function Index(){
        require_once "app/views/content/home/index.php";
    }

    public function Home(){
        $businessModel = new BusinessModel();
        $typeBusiness = $businessModel->GetTypeBusinessxStatus('ACT');

        require_once "app/views/content/home/HomeView.php";
    }
}