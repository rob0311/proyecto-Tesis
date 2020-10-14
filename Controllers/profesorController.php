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
        
            if($this->getInt('crear_clase')==1)
            {
                $this->_view->datos=$_POST;
                $crear=$this->_profesor->newclass(
                    $this->getsql('nombre_clase'),
                    $this->getsql('fecha_clase'),
                    $this->getsql('contenido_clase')
                );
                echo $crear;

            }

        }
        
    
    }
    ?>