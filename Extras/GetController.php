<?php 
/*
Se define el metodo y controlador por defecto segun los datos recibidos por get y lo convertimos en un array
*La posicion del array empieza desde el limitador '/'.
*El controlador se obtendra de la posicion 0
*El metodo de la posicion 1
*Cualquier dato a partir de la posicion 2 sera tomado como parametro.
Ejem. pos0/pos1/pos2

* En caso de que no se obtenga un metodo se le asignara un metodo por defecto
* cuyo valor sera el mismo nombre del controlador, resulta util para visualizar la pagina de inicio.
*/
$Url = !empty($_GET['url']) ?  $_GET['url'] : 'Home/Home';
$ArrUrl = explode('/',$Url);
$Controller = $ArrUrl[0];
$Method = $ArrUrl[0];

$Params = "";

if(!empty($ArrUrl[1])){
    $Method = $ArrUrl[1];
    for($i = 2; $i < count($ArrUrl); $i++){
        $Params .= $ArrUrl[$i] . ',';
    }
    $Params = trim($Params,',');
}
?>