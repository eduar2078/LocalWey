<?php
namespace app\controllers;

class AuthController{
    public function Login(){
        require_once "app/views/content/login.view.php";
    }

    private function GeneratedToken(int $lenght = 32){
        return bin2hex(random_bytes($lenght));
    }

    public function ValidCredentials(){
        $_SESSION["TOKEN_USER"] = $this->GeneratedToken();
        $_SESSION["USER_VALID"] = true;
    }
}