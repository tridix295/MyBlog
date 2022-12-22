<?php 
/*Controlador padre, el cual se va a encargar de comunicar el modelo y la vista
* Al instaciar la vista le estamos indicando al autoload que lo cargue y sera almacenado en la propiedad view el cual podra ser accesible desde el controlador.
*/
class BaseController{
    private $routeModels;
    public function __construct()
    {
        global $PathApp;

        $this->routeModels = $PathApp . '/App/Models';
        $this->loadModels();
        $this->View = new Views();
    }

    protected function loadModels(){
        global $Error_Message;
        global $PathApp;

        //Obtenemos el nombre de la clase que lo esta llamando y el cual correspondera al modelo.
        $model = get_class($this) . 'Model';
        $file = $this->routeModels . '/' . $model . '.php';

        if(!file_exists($file)){
            $error = $Error_Message['ERR-NF-001'] . $file;
            LogSystem("/Logs/LlamarRecurso",$error);
            include $PathApp . '/Views/Errors/500.html';
            die();
        }

        /*
         *Para poder instanciar el modelo la clase debe tener el mismo nombre del controlador que lo
         *llama ejem. Home
        */
        require_once($file);
        $this->model = new $model;
    }
}

?>