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
            $this->_view->renderprofesor('index');
    
    
        }

        public function clases()
        {
            $this->_view->titulo='Crear Clase';
            $this->_view->renderprofesor('clases','index');
        
        // crear clases
            if($this->getInt('crear_clase')==1)
            {
                $this->_view->datos=$_POST;
                $this->_profesor->newclass( 
                    $this->getsql('id_clase'),
                    $this->getsql('fecha_clase'),
                    $this->getsql('nombre_clase'),
                    $this->getTexto('contenido_clase'),
                    $this->getsql('clase_asignatura')       
                   
                );
                 echo '<script>
                       swal({
                        type: "success",
                        title: "¡La clase  ha sido creada correctamente!",
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
    ?>