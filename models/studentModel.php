<?php


class studentModel extends Model{
   
    public function __construct()
    {
       
        parent::__construct();
    }
//funcion que muestre todas las asignaturas  que recibe el estudiante
    public function mostrar_asignatura()
    {
        $carnt=Session::get("Carnet_Est");
        $datos=$this->_db->query("select A.id_Asignatura, A.nombre, A.credito,R.anio_escolar
        from asignatura as A inner join (estudiante as E inner join recibe as R 
          on E.carnet=R.estudiante_carnet) on A.id_Asignatura=R.asignatura_id_asignatura
          where E.carnet='$carnt'
          order by R.anio_escolar DESC"
        );
        return $datos->fetchAll();
    }

    //funcion que muestre todas las clases  que recibe el estudiante
   /*  public function mostrar_clases()
    {
        $carnt=Session::get("Carnet_Est");
        $datos=$this->_db->query("select C.idclase, C.Nombre,R.anio_escolar,A.nombre
        from asignatura as A, clase as C inner join (estudiante as E inner join recibe as R 
          on E.carnet=R.estudiante_carnet) on C.idclase=R.clase_idclase
          where E.carnet='$carnt' and C.asignatura_id_Asignatura=A.id_Asignatura
          order by R.anio_escolar DESC"
        );
        return $datos->fetchAll();
    }*/
   
    public function mostrar_usuario()
    {
        $carnt_user=Session::get("Carnet_Est");
        $datos=$this->_db->query("select * from estudiante as A
          where A.carnet='$carnt_user'"
        );
        return $datos->fetchAll();
    }

  public function anio_escol()
    {
       $carnt_user=Session::get("Carnet_Est");
       $datosA=$this->_db->query("select max(anio_escolar) from recibe
        where estudiante_carnet='$carnt_user' group by estudiante_carnet " );
        return $datosA->fetchAll();  
    }
//funcion que muestre  las asignaturas  que recibe el estudiante segun el año que cursa
   /* public function mostrar_asign_porAnio()
    {
        $carnt=Session::get("Carnet_Est");
      
        $datos=$this->_db->query("select A.id_Asignatura, A.nombre,A.credito,R.anio_escolar
        from asignatura as A inner join (estudiante as E inner join recibe as R 
          on E.carnet=R.estudiante_carnet) on A.id_Asignatura=R.asignatura_id_asignatura
          where E.carnet='$carnt' and R.anio_escolar='5'"
        );
        return $datos->fetchAll();
    }*/
    
//Funcion para mostrar las clases del dia
    public function mostrar_claseDia($idclase)
    {

      $datos=$this->_db->query("SELECT * FROM clase where idclase='$idclase'");
        return $datos->fetchAll();
    }

    //Funcion para mostrar las clases segun la asignatura
    public function mostrar_clases($id_Asignatura)
    {

   $datos=$this->_db->query("SELECT idclase, tema, fecha FROM clase where asignatura_id_Asignatura='$id_Asignatura'");
        return $datos->fetchAll();
    }


    // asistencia
    public function asistir_clase($class)
    {
      $carnt_user=Session::get("Carnet_Est"); //capturar el id del estudiante
      $fecha=date("Y-m-d"); 
     
   $estado=$this->_db->query(" SELECT * FROM asistencia WHERE estudiante_carnet='$carnt_user' AND clase_idclase='$class' AND fecha='$fecha' ");
  
   if(!$estado->fetch()) {

     $this->_db->prepare("insert into asistencia(clase_idclase,estudiante_carnet,fecha)
                       VALUES(:idDia,:carnEst,:fecha)")
                                  ->execute(
                                    array(
                               'idDia' => $class,
                               'carnEst' => $carnt_user,
                               'fecha' => $fecha 
                                        )
                                    );
                                 return "Bienvenido a Clase";
              
     }
     else
              return "Ya marco Asistencia";
}


//Mostrar Archivos
public   function Archivos($idclase)
{
  $datos=$this->_db->query("SELECT a.id_archivo,a.archivo_nombre,a.descripcion,a.ruta FROM archivo as a INNER JOIN  clase as c on(a.fk_clase=c.idclase) WHERE a.fk_clase='$idclase' ");
  return $datos->fetchAll();
}




}//fin del modelo
?>;
