<?php
namespace app;

use app\controllers\AppController;

class App{
    public function run()
    {
        if(isset($_GET["controller"]) && isset($_GET["action"])){
            $controllerName = ucfirst($_GET["controller"]) . "Controller";
            $action = $_GET["action"];

            $controllerClass = "app\\controllers\\" . $controllerName;

            if(class_exists($controllerClass)){
                $controller = new $controllerClass();

                if(method_exists($controller, $action)){
                    echo $controller->$action();
                }else{
                    echo "La acción no existe";
                }
            }else{
                echo "El controlador no existe";
            }
        }else{
            $controller = new AppController();
            echo $controller->Index();
        }
    }
}