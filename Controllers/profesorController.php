<?php

class profesorController extends Controller


{
   
    private $_profesor;
        public function __construct()
        {
            parent::__construct();
            $this->_profesor=$this->loadModel('profesor');
          
    
        }
 
    
        public function index()
        {
            $this->_view->titulo = 'Profesor';
             $table = $this-> generarTablaClass();
            $this->_view->contenido = $table;
            $this->_view->setJs1(array('main'));
            $this->_view->Get_Clases = $this->_profesor->obtener_clases();
            $this->_view->Get_Asignaturas = $this->_profesor->obtener_asignatura();
            $this->_view->renderprofesor('index');  


          
        }

        public function clases()
        {
          
            $this->_view->titulo='Crear Clase';
            $this->_view->codigo=$this->genera_codigo(8);
            $this->_view->Get_Asignaturas = $this->_profesor->obtener_asignatura();
            $this->_view->renderprofesor('clases','index');
           
        
        // crear clases
            if($this->getInt('crear_clase')==1)
            {
                 $this->_view->datos=$_POST;
                $tabla="clase";
                    $datos = array("clase"=>$_POST["id_clase"],
                               "fecha"=>$_POST["fecha_clase"],
                               "tema"=>$_POST["nombre_clase"],
                               "contenido"=>$_POST["contenido_clase"],
                               "asignatura"=>$_POST["clase_asignatura"]
                                );
                   
                    $repuesta=$this->_profesor->newclass($tabla,$datos);
                if($repuesta == "ok"){

                    echo'<script>
                    let base=$("#base").val();
                       swal({
                        type: "success",
                        title: "¡La clase  ha sido creada correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    }).then(function(result){

                        if(result.value = true){

                         window.location.replace(base+"profesor");

                        }

                    });
                  </script>';

                }

            else{

                echo'<script>
                       swal({
                        type: "error",
                        title: "¡Error en Crear Clases........!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    }).then(function(result){

                        if(result.value=true){
                        
                            window.location = ("clases");

                        }

                    });
                  </script>';
                  

            }
            }

  //Editar Clases
    if($this->getInt('EditClases')==1)
        {
         $this->_view->datos=$_POST;
         $tabla="clase";
                      $datos = array("id"=>$_POST["editId"],
                                 "nombre"=>$_POST["editNombre"],
                                 "asignatura"=>$_POST["clase_asignatura"],
                                 "fecha"=>$_POST["fecha_clase"],
                                 "contenido"=>$_POST["contenido_clase"]
                                  );
                     
                      $repuesta=$this->_profesor->updClase($tabla,$datos);
                  if($repuesta == "ok"){
  
                      echo'<script>
                         swal({
                          type: "success",
                          title: "¡La Clase  ha sido Editada  correctamente....!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
  
                      }).then(function(result){
  
                          if(result.value=true){
                            window.location.reload("profesor");
  
                          }
  
                      });
                    </script>';
  
                  }
                  else{
  
                  echo'<script>
                         swal({
                          type: "error",
                          title: "¡Error en Editar Clase........!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
  
                      }).then(function(result){
  
                          if(result.value){
                          
                              window.location.reload();
  
                          }
  
                      });
                    </script>';
  
  
  
              }
              
            }//fin de Editar Clases 
        }


 public function asignaturas()
        {
            $this->_view->titulo='Asignaturas';
            $table = $this->generarTabla();

            $this->_view->contenido = $table;

            $this->_view->setJs1(array('main'));
            $this->_view->Get_Asignaturas = $this->_profesor->obtener_asignatura();
            $this->_view->renderprofesor('asignaturas','index');
           

              //crear Nueva Asignatura  
              if($this->getInt('newAsignatura')==1)
              {
                $this->_view->datos=$_POST;
               $tabla="asignatura";
                      $datos = array("id"=>$_POST["inputId"],
                                 "nombre"=>$_POST["inputNombre"],
                                 "credito"=>$_POST["inputCredito"]
                                  );
                     
                      $repuesta=$this->_profesor->NewAsignatura($tabla,$datos, $this->getsql('inputId'));
                  if($repuesta == "ok"){
  
                      echo'<script>
                         swal({
                          type: "success",
                          title: "¡La Asignatura  ha sido creada correctamente!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
  
                      }).then(function(result){
  
                          if(result.value=true){
                            window.location.reload("profesor/asignaturas");
  
                          }
  
                      });
                    </script>';
  
                  }
                  else{
  
                  echo'<script>
                         swal({
                          type: "error",
                          title: "¡Error en Crear Asignatura........!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
  
                      }).then(function(result){
  
                          if(result.value){
                          
                              window.location.reload();
  
                          }
  
                      });
                    </script>';
  
  
  
              }
              }//fin de crear asignatura

        

  //****************************************************************

  //Editar Asignaturas
    if($this->getInt('EditAsignatura')==1)
        {
         $this->_view->datos=$_POST;
         $tabla="asignatura";
                      $datos = array("id"=>$_POST["EditId"],
                                 "nombre"=>$_POST["EditNombre"],
                                 "credito"=>$_POST["EditCredito"]
                                  );
                     
                      $repuesta=$this->_profesor->updAsignatura($tabla,$datos, $this->getsql('EditId'));
                  if($repuesta == "ok"){
  
                      echo'<script>
                         swal({
                          type: "success",
                          title: "¡La Asignatura  ha sido Editada  correctamente....!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
  
                      }).then(function(result){
  
                          if(result.value=true){
                            window.location.reload("profesor/asignaturas");
  
                          }
  
                      });
                    </script>';
  
                  }
                  else{
  
                  echo'<script>
                         swal({
                          type: "error",
                          title: "¡Error en Editar Asignatura........!",
                          showConfirmButton: true,
                          confirmButtonText: "Cerrar"
  
                      }).then(function(result){
  
                          if(result.value){
                          
                              window.location.reload();
  
                          }
  
                      });
                    </script>';
  
  
  
              }
              
            }//fin de Editar asignatura            
}//fin de la funcion asignatura

 //*******************************************************************
 //Eliminar Asignaturas       
        function elimAsig (){
    
        if($this->_profesor->eliminarAsig($this->getsql('idAsig')))
             echo "1";
         else
             echo '0';
     
    }
     //*******************************************************************
    


  //*********************************************************************
            //Eliminar Clase
      function elimClass (){
    
        if($this->_profesor->eliminarclass($this->getsql('idclass')))
             echo "1";
         else
             echo '0';
     
    }
  //*************************************************************************

    function numero_aleatorio ($ninicial, $nfinal) {
            $numero = rand($ninicial, $nfinal);
        
            return $numero;
        }

   //************************************************************************     
     function genera_codigo ($longitud) {
            $caracteres = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
            $codigo = '';
        
            for ($i = 1; $i <= $longitud; $i++) {
                $codigo .= $caracteres[$this->numero_aleatorio(0, 8)];
            }
        
            return $codigo;
        }
//*****************************************************************************
// Generar Tabla  Asignatura
 public function generarTabla(){
            $fila = $this->_profesor->obtener_asignatura();
            $table = '';

            foreach($fila AS $f){

                $datos = json_encode($f);
                $table .= '
                <tr>
                    <td>'.$f['id_Asignatura'].'</td>
                    <td>'.$f['nombre'].'</td>
                    <td>'.$f['credito'].'</td>
                    <td><button class="btn btn-info editBoton" data-p=\''.$datos.'\' data-toggle="modal" href="#" data-target="#EditarAsignatura" >Editar</button>
                    / <button class="btn-borrar_asig btn btn-danger">Borrar</button> </td> 



                   
                </tr>
                ';
            }

            return $table;
        }
//********************************************************************************************
        // Generar Tabla  Clase
 public function generarTablaClass(){
            $fila = $this->_profesor->obtener_clases();
            $table = '';

            foreach($fila AS $f){

                $datos = json_encode($f);
                $table .= '
                <tr>
                    <td>'.$f['idclase'].'</td>
                    <td>'.$f['tema'].'</td>
                    <td>'.$f['nombre'].'</td>
                     <td>'.$f['fecha'].'</td>
                    <td><button class="btn btn-info editBtnClass" data-p=\''.$datos.'\' data-toggle="modal" href="#" data-target="#EditaClases" >Editar</button>
                    / <button class="btn-borrar btn btn-danger">Borrar</button> </td> 



                   
                </tr>
                ';
            }

            return $table;
        }

   

  
        
        
    
    }
    ?>