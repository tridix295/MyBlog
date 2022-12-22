<?php


class HomeModel extends SQL{
    private $Join = null;
    private $Tables = array('archivos','usuarios','categorias','estados');
    public function __construct()
    {
        parent::__construct('estado');
    }

    public function GetPost(){
       //Query con la que obtenemos todos los post de la BD
       // Por mejorar.
        $query  = 'select PoId,UsNombre,PoTitulo,PotText,CONCAT(CaNombre," | ",DATE_FORMAT(PoFechaCreacion,"%Y-%c-%d")) as CaNombre,EsNombre,AlRuta,CONCAT(ArNombreServidor,".",ArExtension) as Archivo from post
                    inner join usuarios on UsId = PoUsuario
                    inner join categorias on CaId = PoCategoria
                    inner join archivos on ArId = PoImage
                    inner join almacenamiento on AlId = ArPathArchivo
                    inner join estados on EsId = PoEstado where PoEstado = 1';
        $result = $this->select_all($query);
   
        return $result;
    }

    public function Merge_Table(){
        $stament = ' join ';
        foreach($this->Tables as $Table){
           $stament .=  $Table . ',';
        }
        $stament = trim($stament,',');
        
        $this->Join = $stament;
    }

    public function Exec_Query(){

    }
}

?>