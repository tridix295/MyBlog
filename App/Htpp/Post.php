<?php

class Post extends BaseController{

    public function __construct()
    {
      parent::__construct();
    }
    
    public function Post(){
        echo "Mensaje desde Post";
    }

    public function Viewer(String $id){
        /*
         *Mandamos a a llamar a la vista correspondiente, dicha vista estara almacenada en una carpeta cuyo nombre sera la del propio controlador que la esta invocando.
         *@this -> Le pasamos el objecto $Post que la esta llamando
         *@Post -> Nombre del archivo donde esta almacenado la vista.
         *@id -> corresponde al id del post que estamos consultando el cual nos llega desde la url
        */
        $request = $this->model->GetPost($id);
        $this->View->getView($this,'Post',$request);
    }

    private function upload_img($file){

    }
}

?>