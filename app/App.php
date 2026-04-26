<?php
namespace app;

use app\controllers\AppController;
use app\controllers\AuthController;

class App{
    public function run()
    {
        // Si el controlador es Admin, debe validar si ya realizo el inicio de sesión
        if(
            isset($_GET["controller"]) && isset($_GET["action"]) &&
            ucfirst($_GET["controller"]) == "Admin"
        ){
            // Validamos que el usuario se haya autenticado
            if(isset($_SESSION["TOKEN_USER"]) && isset($_SESSION["USER_VALID"])){
                // Capturamos el controlador y la acción
                $controllerName = ucfirst($_GET["controller"]) . "Controller";
                $action = $_GET["action"];
                // Construimos la ruta del controlador
                $controllerClass = "app\\controllers\\" . $controllerName;
                // Validamos si el controlador existe
                if(class_exists($controllerClass)){
                    // Instanciamos el controlador
                    $controller = new $controllerClass();
                    // Validamos si el metodo existe en el controlador
                    if(method_exists($controller, $action)){
                        echo $controller->$action();
                    }else{
                        echo "La acción no existe";
                    }
                }else{
                    echo "El controlador no existe";
                }
            }else{
                $controller = new AuthController();
                echo $controller->Login();
            }
        }else if(isset($_GET["controller"]) && isset($_GET["action"])){// Si existe el controlador y la acción hacemos el llamado internamente
            // Capturamos el controlador y la acción
            $controllerName = ucfirst($_GET["controller"]) . "Controller";
            $action = $_GET["action"];
            // Construimos la ruta del controlador
            $controllerClass = "app\\controllers\\" . $controllerName;
            // Validamos si el controlador existe
            if(class_exists($controllerClass)){
                // Instanciamos el controlador
                $controller = new $controllerClass();
                // Validamos si el metodo existe en el controlador
                if(method_exists($controller, $action)){
                    echo $controller->$action();
                }else{
                    echo "La acción no existe";
                }
            }else{
                echo "El controlador no existe";
            }
        }else{// Si no existe mostramos el controlador por defecto
            $controller = new AppController();
            echo $controller->Index();
        }
    }
}