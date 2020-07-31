<?php
class indexController extends Controller
{

    private $_login;
 public function __construct()
 {
 parent::__construct();
 $this->_login=$this->loadModel('inicio');
 }

public function index()
    {
         $this->_view->titulo = 'SACUR';
         $this->_view->setJs(array('validar'));
         $this->_view->setJs(array("validarLogin"));
         $this->_view->render('index');


        
// registrar estudiante
        if($this->getInt('enviarRegisEst')==1){
            $this->_view->datos=$_POST;
              $this->_login->insertarestudiante(
                   
                    $this->getsql('carnetReg'),
                    $this->getsql('Name'),
                    $this->getsql('apellido'), 
                    $this->getsql('genero'),
                    $this->getsql('number'),
                    $this->getsql('departamento'),
                    $this->getsql('ciud'),
                    $this->getPostParam('EMAIL'),
                    $this->getsql('carrera'),
                    $this->getsql('pass2'),
                    $this->getsql('fnac') 
                    );
              } //fin del if enviarRegisEst
      
    
                // Registro Profesor
     if($this->getInt('enviarProf')==1){
        $this->_view->datos=$_POST;
         

        $this->_login->insertarProfesor(
               
                $this->getsql('nameProf'),
                $this->getsql('apellidoProf'),
                $this->getsql('user'), 
                $this->getsql('carrera'),
                $this->getsql('pass2p'),
                $this->getPostParam('email_profe'),
                $this->getsql('genero')
                
                
               
                );
              } 
           
            
             
  
    } 
      //fin de la funcion index
           //login estudiante
         
  
public function verificarCarnet()
     {
         if($this->_login->verificarCarnet($this->getsql('carnetReg')))
             echo "El carnet ya existe";
         else
             echo '0';
     }

     
     
public function verificarEmail()
     {
         if($this->_login->verificarEmail($this->getsql('EMAIL')))
             echo "El Correo ya existe";
         else
             echo '0'; 
            
     }
public function verificaruser()
     {
         if($this->_login-> verificaruser($this->getsql('user')))
             echo "El usuario ya existe";
         else
             echo '0';
     }
     
public function verificarEmailp()
     {
         if($this->_login->verificarEmailp($this->getPostParam('EMAIL')))
             echo "El Correo ya existe";
         else
             echo '0';
     }
  
     //verificar si el estudiante esta activo
    public function verificarEstado()
    {
        if($this->_login->EstadoEst($this->getsql('carnet'),$this->getsql('password')))
               echo 'Este usuario no esta habilitado';
               else
               echo '0';
        
    }
     
    
 //funcion login de estudiante
 public function logEst(){
     $datos=$this->_login->getEstudiante(
        $this->getsql('carnet'),
        $this->getSql('password'));
     if  ($datos)   
         {
            echo '0';
            Session::set("nombre_estudiante",$datos['nombres'] . " " . $datos['apellidos']);
            Session::set("Carnet_Est",$datos['carnet']);
         }
       else
        echo 'Carnet y/o Contraseña Incorrecta';
    }

    //funcion login de Profesor
 public function loginProf(){
    $dat=$this->_login->getprof(
       $this->getsql('users'),
       $this->getSql('pass')); 
       if ($dat)  
        {
           echo '0';
           Session::set("nombre_profesor",$dat['nombres'] . " " . $dat['apellidos']);
           Session::set("id",$dat['idprofesor']);
        }
      else
       echo 'Usuario y/o Contraseña Incorrecta ';
    }//fin funcionlogin profesor

    public function cerrar()
    {
        Session::destroy();
        $this->redireccionar();
    }
  
   
}

//fin de la clase indexController
?>
 