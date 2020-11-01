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
                $this->_profesor->newclass( 
                    $this->getsql('id_clase'),
                    $this->getsql('fecha_clase'),
                    $this->getsql('nombre_clase'),
                    $this->getTexto('contenido_clase'),
                    $this->getsql('clase_asignatura')       
                   
                );
                if(0){
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
                else{
                    echo "Error en crear la clase";
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