<?php 
/*Controlador padre, el cual se va a encargar de comunicar el modelo y la vista
* Al instaciar la vista le estamos indicando al autoload que lo cargue y sera almacenado en la propiedad view el cual podra ser accesible desde el controlador.
*/
class baseController{
    public function __construct()
    {
     $this->loadModels();
     $this->View = new Views();
    }

    protected function loadModels(){
        echo "Mensaje desde LoadModel ";
    }
}

?>