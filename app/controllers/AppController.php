<?php
namespace app\controllers;

use app\models\MunicipalityModel;

class AppController{
    private $municipalityModel;

    public function Index(){
        require_once "app/views/content/index.view.php";
    }

    public function Home(){
        $this->municipalityModel = new MunicipalityModel();
        $municipalitysEnableds = $this->municipalityModel->getxStatus('ACT');
        require_once "app/views/content/home.view.php";
    }

    public function Major(){
        $this->municipalityModel = new MunicipalityModel();
        $location = $this->municipalityModel->getxId($_GET["id"]);
        require_once "app/views/content/major.view.php";
    }
}