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
    // Panel de administración de negocios y creación de negocios
    public function IndexBusiness(){
        // Inicializamos las clases de modelos necesarias
        $this->businessModel = new BusinessModel();
        $this->clientModel = new ClientModel();
        $this->departmentModel = new DepartmentModel();
        // Modal para crear los negocios
        $clientsEnableds = $this->clientModel->getxStatus('ACT');
        $typeBusinessEnableds = $this->businessModel->GetTypeBusinessxStatus('ACT');
        $departmentsEnableds = $this->departmentModel->getxStatus('ACT');
        require_once "app/views/content/admin/business/index.view.php";
    }
    // Obtener los municipios segun el departamento seleccionado
    public function getMunicipalityxDepartment(){
        $this->municipalityModel = new MunicipalityModel();
        $municipalityEnableds = $this->municipalityModel->GetxDepartmentxStatus($_GET["id"], 'ACT');
        echo json_encode($municipalityEnableds);
    }
    // Obtener los corregimientos y barrios segun el municipio que seleccione
    public function getNeighborhoodsxMunicipality(){
        $this->municipalityModel = new MunicipalityModel();
        $neighborhodsEnableds = $this->municipalityModel->GetNeighborhoodsxIdMunicipalityxStatus($_GET["id"], 'ACT');
        echo json_encode($neighborhodsEnableds);
    }
    // Registrar negocio nuevo
    public function createBusiness(){
        $this->businessModel = new BusinessModel();
        // Capturamos la imagen temporal
        $imageFrontPageNameTemp = $_FILES["file-create-image-frontPage"]["tmp_name"];
        $imageMajorNameTemp = $_FILES["file-create-image-major"]["tmp_name"];
        // Si no existe la carpeta la creamos
        if (!file_exists("app/views/resources/img/business/" . $_POST["txt-create-name-business"])) {
            mkdir("app/views/resources/img/business/" . $_POST["txt-create-name-business"]);
        }
        // Mapear MIME a extensión
        $extensiones = [
            'image/jpeg' => 'jpg',
            'image/png' => 'png'
        ];

        $extensionImageFrontPage = $extensiones[$_FILES["file-create-image-frontPage"]["type"]] ?? null;
        $extensionImageMajor = $extensiones[$_FILES["file-create-image-major"]["type"]] ?? null;

        if (!$extensionImageFrontPage) {
            echo json_encode([
                "code" => 400,
                "title" => "Extensión invalida",
                "message" => "La extensión de la imagen de portada no es valida"
            ]);
            exit();
        }else if(!$extensionImageMajor){
            echo json_encode([
                "code" => 401,
                "title" => "Extensión invalida",
                "message" => "La extensión de la imagen de principal no es valida"
            ]);
            exit();
        }
        // Ruta construida como se almacenara
        $pathStorageImageFrontPage = "app/views/resources/img/business/" . $_POST["txt-create-name-business"] . "/PORTADA001" . date("Ymd") . "001." . $extensionImageFrontPage;
        $pathStorageImageMajor = "app/views/resources/img/business/" . $_POST["txt-create-name-business"] . "/PRINCIPAL001" . date("Ymd") . "001." . $extensionImageMajor;
        // Guardar archivo
        if (
            move_uploaded_file($imageFrontPageNameTemp, $pathStorageImageFrontPage) &&
            move_uploaded_file($imageMajorNameTemp, $pathStorageImageMajor)
        ) {
            // Parametros requeridos para la base de datos
            $params = [
                "id-client" => $_POST["slt-create-client"],
                "name-business" => $_POST["txt-create-name-business"],
                "description" => $_POST["txt-create-description"],
                "id-municipality" => $_POST["slt-create-municipality"],
                "id-neighborhood" => $_POST["slt-create-neighborhood"],
                "address" => $_POST["txt-create-address"],
                "id-type-business" => $_POST["slt-create-type-business"],
                "image-front-page" => $_POST["txt-create-name-business"] . "/PORTADA001" . date("Ymd") . "001." . $extensionImageFrontPage,
                "image-major" => $_POST["txt-create-name-business"] . "/PRINCIPAL001" . date("Ymd") . "001." . $extensionImageMajor,
                "status" => "ACT"
            ];
            // Registramos en la base de datos
            $response = $this->businessModel->SetBusiness($params);
            if($response){
                echo json_encode([
                    "code" => 200,
                    "title" => "Registro exitoso",
                    "message" => "El negocio ha sido registrado correctamente"
                ]);
            }else{
                echo json_encode([
                    "code" => 500,
                    "title" => "Error al registrar",
                    "message" => "Ocurrio un problema al intentar registrar el negocio"
                ]);
            }
        } else {
            echo "Error al subir archivo";
        }
    }
    // Consultar negocios
    public function ListBusiness(){
        $this->businessModel = new BusinessModel();
        $allBusiness = $this->businessModel->GetAll();
        require_once "app/views/content/admin/business/list.view.php";
    }
}