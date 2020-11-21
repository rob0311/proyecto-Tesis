<?php

    class profesorModel extends Model{

        public function __construct()
        {
            parent::__construct();
        }

        public function newclass($tabla, $datos) {
        
        $stmt = $this->_db->prepare("INSERT INTO $tabla(idclase,fecha,tema,contenido,asignatura_id_Asignatura) 
            VALUES (:id,:fech,:tem,:content,:asig)");

        $stmt->bindParam(":id", $datos["clase"], PDO::PARAM_STR);
        $stmt->bindParam(":fech", $datos["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":tem", $datos["tema"], PDO::PARAM_STR);
        $stmt->bindParam(":content", $datos["contenido"], PDO::PARAM_STR);
        $stmt->bindParam(":asig", $datos["asignatura"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            return "error";
        
        }

        $stmt->close();
        $stmt = null;
       }

 public function NewAsignatura($tabla, $datos) {
      
 $stmt = $this->_db->prepare("INSERT INTO $tabla(id_Asignatura,nombre,credito) 
            VALUES (:id,:nombre,:credito)");

        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":credito", $datos["credito"], PDO::PARAM_STR);
        if($stmt->execute()){

            return "ok";

        }else{

            return "error";
        
        }

        $stmt->close();
        $stmt = null;
       
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