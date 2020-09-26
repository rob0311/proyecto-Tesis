<?php

class profesorController extends Controller


{
    
    
        public function __construct()
        {
            parent::__construct();
    
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
        }
        
    
    }
    ?>