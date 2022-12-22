<?php 

    class PostModel extends SQL{
        public function __construct(){
            parent::__construct('Post');
        }

        public function GetPost($id,$context = 'select'){
            switch($context){
                case 'select': return $this->SelectPost($id); break;
                case 'update': echo "Actualizar"; break;
                case 'Eliminar': echo "Eliminar"; break;
                default: echo "Nada"; break;
            }
        }

        private function SelectPost($id){
            $query = 'select PoId,UsNombre,PoTitulo,PotText,CaId,CONCAT(CaNombre," | ",DATE_FORMAT(PoFechaCreacion,"%Y-%c-%d")) as Categoria,EsNombre,AlRuta,CONCAT(ArNombreServidor,".",ArExtension) as Archivo from post
            inner join usuarios on UsId = PoUsuario
            inner join categorias on CaId = PoCategoria
            inner join archivos on ArId = PoImage
            inner join almacenamiento on AlId = ArPathArchivo
            inner join estados on EsId = PoEstado where PoEstado = 1 and PoId= ' . $id;

            $dataPost['data'] = $this->select($query);
            $categorias['Categoria'] = $this->select_all("select * from categorias");

            return array_merge($dataPost,$categorias);
        }
    }
?>