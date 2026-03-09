<?php
// Autoload con soporte para namespaces
spl_autoload_register(function ($class) {
    // Convertir el namespace en ruta
    $classPath = str_replace("\\", "/", $class);
    // Crear ruta completa dentro de /app
    $file = __DIR__ . "/" . $classPath . ".php";
    if (file_exists($file)) {
        require_once $file;
    }
});