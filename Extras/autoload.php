<?php 
/*
Este sctript tiene como finalidad cargar de manera dinamica las clases que sean heradadas del controlador padre.
Ejem.
{Controller_Home} extends baseController...
    Para este caso la clase baseController sera cargada y asi mismo con las demas clases hijas.

@file ruta donde estan alojadas las pricipales clases como el controlador base, el controlador de la vista, conexion con la BD entre otras.
*/
spl_autoload_register(
    function($class){
        global $PathApp;
        $file = $PathApp . '/App/Htpp/BaseController/' . $class . '.php';

        if(file_exists($file)){
            require_once $file;
        }
    }
);

?>