<?php

class Views{
    public function __construct()
    {

    }
    public function getView($Controller,$View,$data = null){
        global $Warning_Message;
        global $PathApp;
        //Obtenemos la ruta de la vista
        $Folder = get_class($Controller);
        $Header  = getViews('Partials/Headers.php');
        $Footer = getViews('Partials/Footer.php');
        $file = getViews($Folder . '/' . $View . '.php');

        if($file){
            require_once $Header;
                include_once $file;
            require_once $Footer;
        }else{

            $error = $Warning_Message['WN-NF-001'] . " Views/$Folder/$View.php";
            LogSystem("/Logs/LlamarRecurso",$error);
            
            //En caso de encontrar la vista mostramos el template de error
            include $PathApp . '/Views/Errors/404.html';
        }

    }
}

?>