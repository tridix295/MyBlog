<?php 

    function getViews($resource,$type = 'default'){
        $status = false;
        global $PathApp;
        switch($type){
            case 'default':
            $file = $PathApp . '/Views/' . $resource;
                if(file_exists($file)){
                    $status = $file = $PathApp . '/Views/' . $resource;
                }
            break;
            default:
            $status = false;

        }
        return $status;
    }


?>