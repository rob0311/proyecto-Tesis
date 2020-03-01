<?php

class studentController extends Controller
{
    private $std_model;
    
        public function __construct()
        {
            parent::__construct();
    
          $this-> std_model = $this->loadModel('student');
    
        }
    
        public function index()
        {
           
            $this->_view->verClases= $this->std_model->mostrar_clases();
            $this->_view->datos_user =$this->std_model->mostrar_usuario();
            $this->_view->anio_escol = $this->std_model->anio_escol();
            $this->_view->titulo =  'Estudiante';
            $this->_view->setJs1(array('filtro'));
            $this->_view->renderizar('index');
         }

    

      //funciones que cargan las paginas 
        public function perfil() //vista perfil
        {
            $this->_view->datos_user =$this->std_model->mostrar_usuario();
           // $this->_view->asignatura_recib = $this->std_model->mostrar_asignatura();
            $this->_view->titulo = 'Perfil';
            $this->_view->renderizar('perfil','student');
        }
        public function Ver_clases() //vista ver clases
        {
           $this->_view->titulo = 'Clases';
           $this->_view->renderizar('Ver_clases','student');
        }

       

        
    }
    ?>