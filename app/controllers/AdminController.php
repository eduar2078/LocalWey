<?php
namespace app\controllers;

use app\models\BusinessModel;

class AdminController{
    private $businessModel;

    public function Index(){
        require_once "app/views/content/admin/index.php";
    }
    // Negocios
    public function IndexBusiness(){
        require_once "app/views/content/admin/business/index.php";
    }

    public function ListBusiness(){
        $this->businessModel = new BusinessModel();
        $allBusiness = $this->businessModel->GetAll();

        require_once "app/views/content/admin/business/list.php";
    }
}