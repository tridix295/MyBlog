<?php 

//Clase principal el cual va a heredar la clase padre del controlador base
class Home extends BaseController{
    public function __construct()
    {
      parent::__construct();
    }

    public function Home(){
        /*
        *Mandamos a a llamar a la vista correspondiente, dicha vista estara almacenada en una carpeta cuyo nombre sera la del propio controlador que la esta invocando.
        *@this -> Le pasamos el objecto $Home que la esta llamando
        *@home -> Nombre del archivo donde esta almacenado la vista.
        */
       $Request = $this->model->getPost();
       $this->View->getView($this,'Home',$Request);
       
    }
}

?>
