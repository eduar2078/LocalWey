<?php
namespace app\controllers;

use app\models\BusinessModel;
use app\models\ClientModel;
use app\models\DepartmentModel;
use app\models\MunicipalityModel;

class AdminController{
    private $businessModel;
    private $clientModel;
    private $departmentModel;
    private $municipalityModel;

    public function Index(){
        require_once "app/views/content/admin/index.php";
    }
    /////////////////////////////////////////////////////////////
    ////////////////////// Negocios ////////////////////////
    ///////////////////////////////////////////////////////////
    public function IndexBusiness(){
        $this->clientModel = new ClientModel();
        $this->departmentModel = new DepartmentModel();
        $clientsEnableds = $this->clientModel->getxStatus('ACT');
        $departmentsEnableds = $this->departmentModel->getxStatus('ACT');
        require_once "app/views/content/admin/business/index.view.php";
    }

    public function getMunicipalityxDepartment(){
        $this->municipalityModel = new MunicipalityModel();
        $municipalityEnableds = $this->municipalityModel->getxDepartmentxStatus($_GET["id"], 'ACT');
        echo json_encode($municipalityEnableds);
    }

    public function ListBusiness(){
        $this->businessModel = new BusinessModel();
        $allBusiness = $this->businessModel->GetAll();
        require_once "app/views/content/admin/business/list.view.php";
    }
}