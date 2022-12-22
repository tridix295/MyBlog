<?php 
require_once $PathApp . '/Extras/GetController.php';
require_once $PathApp . '/Extras/autoload.php';

//Definimos la ruta del controlador que estaremos llamado mediante la url.
$ControllerFile = $PathApp . '/App/Htpp/' . $Controller . '.php';

if(!file_exists($ControllerFile)){
        $error = $Warning_Message['WN-NF-001'] . $ControllerFile;
        LogSystem("/Logs/LlamarRecurso",$error);
        include $PathApp . '/Views/Errors/404.html';
        die();
    }

require_once $ControllerFile;

// Instanciamos el controlador segun el nombre que nos llegue desde la url, tener en cuenta que el
// nombre de la clase debe ser igual al nombre del archivo
$Controller = new $Controller();

if(!method_exists($Controller,$Method)){
    include $PathApp . '/Views/Errors/alerta.html';
    die();
}

$Controller->{$Method}($Params);
?>