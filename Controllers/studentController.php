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
            $this->_view->titulo =  'Estudiante';
            $this->_view->setJs1(array('modal'));
            $this->_view->GetAsig= $this->std_model->mostrar_asignatura();
            $this->_view->datos_user =$this->std_model->mostrar_usuario();
            $this->_view->anio_escol = $this->std_model->anio_escol();
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


        public function clases($id_Asignatura) //vista para ver las clases de cada asignatura
        {
            $this->_view->titulo = 'Clases';
            $this->_view->GetClases = $this->std_model->mostrar_clases($id_Asignatura);
           // $this->_view->setJs1(array('modal'));
            $this->_view->renderizar('clases','student');   
        }

        //vista para ver las clases del dia
         public function ClaseDia($idclase)
        {
            $this->_view->titulo = 'Temas';
            $this->_view->GetClaseDia = $this->std_model->mostrar_claseDia($idclase);
            $this->_view->GetArchivo = $this->std_model->Archivos($idclase);
            $this->_view->setJs1(array('funciones'));
            $this->_view->renderizar('ClaseDia','student');
            
        }

        public function asistencia(){

           if($this->std_model->asistir_clase()){
             echo 'Bienvenido a Clases.....';

         }
         else
             echo 'Ya Marco asistencia';
           }
    // descargar archivos del servidor
    public function descargar_archivo(){
$fileName = basename('ejercicios.pdf');
$filePath = 'documentos/archivos/'.$fileName;
if(!empty($fileName) && file_exists($filePath)){
    // Define headers
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/pdf");
    header("Content-Transfer-Encoding: binary");
    
    // Read the file
    readfile($filePath);
    exit;
}else{
    echo 'Archivo no encontrado.';
}

           }

   

    }?>