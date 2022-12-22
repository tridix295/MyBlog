<?php

//Ruta fisica donde se encuentra alojado el sistema
global $PathApp; $PathApp = "C:/wamp64/www/MyBlog";

global $Helpers; $Helpers = $PathApp . "/Helpers";
require_once $Helpers . '/StatusCode.php';
require_once $PathApp . '/Helpers/getResources.php';

global $UrlApp; $UrlApp = 'http://bystmaker/';

global $Usuario; $Usuario = 'root';
global $Pass; $Pass = '';
global $Servidor; $Servidor = 'localhost';
global $Puerto; $Puerto = '3307';
global $Esquema; $Esquema = 'bytsmaker';

?>