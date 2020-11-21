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
            $this->_view->Get_Clases = $this->_profesor->obtener_clases();
            $this->_view->Get_Asignaturas = $this->_profesor->obtener_asignatura();
            $this->_view->renderprofesor('index');  


            //crear Nueva Asignatura  
            if($this->getInt('newAsignatura')==1)
            {
              $this->_view->datos=$_POST;
             $tabla="asignatura";
                    $datos = array("id"=>$_POST["inputId"],
                               "nombre"=>$_POST["inputNombre"],
                               "credito"=>$_POST["inputCredito"]
                                );
                   
                    $repuesta=$this->_profesor->NewAsignatura($tabla,$datos);
                if($repuesta == "ok"){

                    echo'<script>
                       swal({
                        type: "success",
                        title: "¡La Asignatura  ha sido creada correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    }).then(function(result){

                        if(result.value=true){
                          window.location.reload("index");

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
                        
                            window.location = "index";
                            location.reload();

                        }

                    });
                  </script>';



            }
            }//fin de crear asignatura
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
                       swal({
                        type: "success",
                        title: "¡La clase  ha sido creada correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"

                    }).then(function(result){

                        if(result.value = true){
                          window.location.replace("index");

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

                        if(result.value){
                        
                            window.location = "clases";

                        }

                    });
                  </script>';
                  

            }




   
            }

        }

        function numero_aleatorio ($ninicial, $nfinal) {
            $numero = rand($ninicial, $nfinal);
        
            return $numero;
        }
        function genera_codigo ($longitud) {
            $caracteres = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
            $codigo = '';
        
            for ($i = 1; $i <= $longitud; $i++) {
                $codigo .= $caracteres[$this->numero_aleatorio(0, 8)];
            }
        
            return $codigo;
        }

  
        
        
    
    }
    ?>