<?php
//Mensahes de procesamiento completos.
$Succes_Message = array ();

//Mensahes de alerta
global $Warning_Message; $Warning_Message = array(
    'WN-NF-001' => 'Lo sentimos el recurso que esta intentando consultar no fue encontrado. ->',
    'WN-MT-001' => 'Lo sentimos la accion que esta intentando realizar no fue permitida'
);

//Mensaje para los errores generaod en el sistema
$Error_Message = array(
    'ERR-NF-001' => 'Esta intentando llamar a un modelo que aparantemente no existe en la ubicacion ->'
);
?>