<?php
require_once $PathApp . '/Helpers/getResources.php';
class Views{
    public function __construct()
    {
        
    }
    public function getView($Controller,$View){
        global $PathApp;

        //Obtenemos la ruta de la vista
        $Header  = getViews('Partials/Headers.php');
        $Footer = getViews('Partials/Footer.php');
        $file = getViews(get_class($Controller) . '/' . $View . '.php');

        if($Header && $file && $Footer){
            require_once $Header;
                include_once $file;
            require_once $Footer;
        }else{
            echo "</br>Vista no fue encontrada";
        }

    }
}

?>