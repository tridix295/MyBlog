<?php 

    //Funcion para verificar si alguna vista realmente existe;
    function getViews($resource,$type = 'default'){
        $status = false;
        global $PathApp;
        switch($type){
            case 'default':
            $file = $PathApp . '/Views/' . $resource;
                if(file_exists($file)){
                    $status = $file;
                }
            break;
            default:
            $status = false;

        }
        return $status;
    }

    /*
     * Funcion para incluir modales en nuestra vista
     * @Modal -> Nombre del modal que vamos a incluir
     * @Tipo -> Tipo, accion o rol que estara realizando el modal, editar, crear, etc.
     * @Data -> Al llamar al modal puede que este necesite incluir alguna informacion como por ejemplo al editar algun form.
    */
    function Modal(String $Modal,$Tipo,$data = null){

        global $PathApp;
        global $Warning_Message;
        $PahtModal = $PathApp . '/Views/Modals/' . $Modal . $Tipo . '.php';
        if(file_exists($PahtModal)){
            include $PahtModal;
        }else{
            $error = $Warning_Message['WN-NF-001'] . $PahtModal;
            LogSystem('/Logs/LlamarRecurso',$error);
        }

    }

    /*
     * Funcion para generar logs en una ruta en especifico
     * @Data-> Ruta donde estaremos almacenando el log.
     * @Data -> Datos que estaremos almacenando en nuestro log.
    */
    function LogSystem($Path,$data,$ext = 'log'){
        global $PathApp;
        $time = date('Y-m-d H:i:s');
        $Path = $PathApp . $Path . '__' . date('Y-m-d') . '.' .$ext;
        $data = PHP_EOL . '***** Inicio Log:' . $time . ' *****'. PHP_EOL . $data . PHP_EOL .'**** Fin Log ****' . PHP_EOL;

        $handle = fopen($Path,'a+');
        fwrite($handle,$data);
        fclose($handle);
    }

?>