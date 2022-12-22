<?php 
    class SQL extends Conn_BD{
        private $conexion;
        private $strquery;
        private $arrvalues;

        public function __construct($Table)
        {
            parent::__construct();
            $this->conexion = $this->GetConnect();
            if(!is_object($this->conexion)){
                die('<script>alert("Error Al conectarse a la BD.")</script>');
            }
        }

        //Insertar registro
        public function Insert(string $query, array $values){
            $this->strquery = $query;
            $this->arrvalues = $values;

                $insert = $this->conexion->prepare($this->strquery);
                $resinsert = $insert->execute($this->arrvalues);
                if($resinsert){
                $lastinsert = $this->conexion->lastInsertId();
                }else{
                $lastinsert = 0;
                }
            //Devolvelos el id del ultimo registro insertado
            return $lastinsert;
        }

        //Buscar un registro
        public function select(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        //Buscar todos los registros
        public function select_all(string $query){
            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        //Actualizar registros
        public function Update(string $query, array $values){
            $this->strquery = $query;
            $this->arrvalues = $values;

            $update = $this->conexion->prepare($this->strquery);
            $resexecute = $update->execute($this->arrvalues);
            return $resexecute;
        }

        //Eliminar registros
        public function Delete(string $query){

            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            return $result;
        }
    }
?>