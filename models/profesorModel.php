<?php

    class profesorModel extends Model{

        public function __construct()
        {
            parent::__construct();
        }
//*************************************************************************
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
//*************************************************************************
 public function NewAsignatura($tabla, $datos,$ida) {
 $id_profesor=Session::get("id"); //capturar el id del Profesor
 $stmt = $this->_db->prepare("INSERT INTO $tabla(id_Asignatura,nombre,credito) 
            VALUES (:id,:nombre,:credito)");

        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":credito", $datos["credito"], PDO::PARAM_STR);
        if($stmt->execute()){
          $this->_db->prepare("insert into imparte(profesor_idprofesor,asignatura_id_Asignatura)
                       VALUES(:idP,:idA)")
                                  ->execute(
                                    array(
                               'idP' => $id_profesor,
                               'idA' => $ida
                              
                                        )
                                    );
            return "ok";

        }else{

            return "error";
        
        }

        $stmt->close();
        $stmt = null;
       
       }
//**********************************************************
        public function obtener_asignatura()
        {
            $id_profesor=Session::get("id"); //capturar el id del Profesor
            $asignaturas = $this->_db->query("SELECT a.id_Asignatura,a.nombre,a.credito FROM `asignatura` as a 
                   INNER JOIN imparte as i on a.id_Asignatura=i.asignatura_id_Asignatura
                   INNER JOIN profesor as p on i.profesor_idprofesor=p.idprofesor
                   WHERE p.idprofesor=$id_profesor");

            return $asignaturas->fetchAll();
        }
//**************************************************************
        public function obtener_clases()
        {
            $id_profesor=Session::get("id"); //capturar el id del Profesor
            $clases = $this->_db->query("SELECT c.idclase,c.tema,c.fecha,a.nombre FROM `clase` as c 
                   INNER JOIN asignatura as a on a.id_Asignatura=c.asignatura_id_asignatura
                   INNER JOIN imparte as i on a.id_Asignatura=i.asignatura_id_Asignatura
                   INNER JOIN profesor as p on i.profesor_idprofesor=p.idprofesor
                   WHERE p.idprofesor=$id_profesor");
            return $clases->fetchAll();
        }


//*************************************************************
        public function  eliminarAsig($id){

        $this->_db->query("DELETE FROM asignatura WHERE id_Asignatura = $id");
        }
       
//*****************************************************************
         public function  eliminarclass($id){

      $class= $this->_db->query("DELETE FROM `clase` WHERE `clase`.`idclase` = '$id' ");
        if($class->fetch()){
                    return true;
                }
                  return false ;
        }







    }


?>