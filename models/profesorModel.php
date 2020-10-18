<?php

    class profesorModel extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        public function newclass($idc,$fecha,$tema,$cont,$asig){
            
            $this->_db->prepare("insert into clase(idclase,fecha,tema,contenido,asignatura_id_Asignatura)
            VALUES (:id,:fech,:tem,:content,:asig)")
            ->execute(
                array(
                    'id'=> $idc,
                    'fech'=> $fecha,
                    'tem' => $tema,
                    'content' => $cont,
                    'asig'=> $asig
                )
            );
          //      return "se creo la clase";
        }

    }


?>