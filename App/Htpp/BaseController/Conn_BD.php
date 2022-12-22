<?php 

    class Conn_BD{
        


        private $Conn = null;
        private $User = null;
        private $Host = null;
        private $Port = null;
        private $BD = null;
        public function __construct()
        {
            //Obtenemos las variables globales de nuestro config
            global $Usuario;
            global $Pass;
            global $Servidor;
            global $Puerto;
            global $Esquema;

            $this->User = $Usuario;
            $this->Pass = $Pass;
            $this->Port = $Puerto;
            $this->Host = $Servidor;
            $this->BD = $Esquema;
        }

        private function Connect(){

            $Conexion = 'mysql:host=' . $this->Host . ';port=' .$this->Port . ';dbname=' . $this->BD . ';';

            try {
                //Definimos la instancia de la conexion y le pasamos los parametros de la conexion al constructor.
                $this->Conn = new PDO($Conexion,$this->User,$this->Pass);

                //Establecemos el reporte de errores de PDO y el manejo de exepciones.
                $this->Conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $th) {

                //En caso de fallar obtenemos el mensaje de la exepcion.
                $tiempo = date('Y-m-d H:i:s');
               $this->Conn = '<---' . $tiempo . '---> Error al conectar =>'. $th->getMessage();
            }

        }

        public function GetConnect(){
            $this->Connect();
            return $this->Conn;
        }
    }

?>