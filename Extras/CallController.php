<?php 
require_once $PathApp . '/Extras/GetController.php';

//Definimos la ruta del controlador que estaremos llamado.
$ControllerFile = $PathApp . '/App/Htpp/' . $Controller . '.php';

if(!file_exists($ControllerFile)){ die($Warning_Message['WN-NF-001'] . $ControllerFile); }

require_once $ControllerFile;

// Instanciamos el controlador segun el nombre que nos llegue desde la url, tener en cuenta que el
// nombre de la clase debe ser igual al nombre del archivo
$Controller = new $Controller();

if(!method_exists($Controller,$Method)){die($Warning_Message['WN-MT-001']);}

$Controller->{$Method}($Param);
?>