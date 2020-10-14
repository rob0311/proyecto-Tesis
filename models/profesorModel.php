<?php

    class profesorModel extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        public function newclass($nombre,$fecha,$contenido){
            
            $this->_db->prepare("INSERT INTO clase(fecha,tema,contenido)
            VALUES (:fech,:nom,:content)")->execute(
                array(
                    'fech'=> $fecha,
                    'nom' => $nombre,
                    'content' => $contenido
                )
            );
            return "se creo la clase";
        }

    }


?>