<?php

    class profesorModel extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        public function newclass($fecha,$tema,$cont,$asig){
            
            $this->_db->prepare("INSERT INTO clase(fecha,tema,contenido,asignatura_id_Asignatura)
            VALUES (:fech,:tem,:content,:asig)")
            ->execute(
                array(
                    
                    'fech'=> $fecha,
                    'tem' => $tema,
                    'content' => $cont,
                    'asig'=> $asig
                )
            );
          //      return "se creo la clase";
          
        }

        public function obtener_asignatura()
        {
            $asignaturas = $this->_db->query("SELECT * FROM `asignatura`");

            return $asignaturas->fetchAll();
        }

        public function obtener_clases()
        {
            $clases = $this->_db->query("SELECT * FROM clase");
            return $clases->fetchAll();
        }

    }


?>