<?php
/**
 * Created by PhpStorm.
 * User: JCPONCE
 * Date: 24/03/2017
 * Time: 10:47 AM
 */

class View{


  private $_controlador;
  private $_js1;
  private $_js;

public function __construct(Request $peticion)
  {
      $this->_controlador =$peticion->getControlador();
      $this->_js1=array();
      $this->_js=array();
  }
  public function renderizar($vista,$item=false)
  {
      $menu=array();

      if (Session::get('autenticado')){

    // if (Session::get('level')=='admin'){
      $menu=array(
          array('id'=>'inicio',
           'titulo'=>'Inicio',
            'enlace'=>BASE_URL,
            'imagen'=>'home'
          ),

             array('id'=>'acciones',
              'titulo'=>'Acciones de Administrador',
              'enlace'=>BASE_URL.'acciones_administrador'
             ),

          array('id'=>'login',
                  'titulo'=>'Salir',
                  'enlace'=>BASE_URL.'login/cerrar'
              )


      );
     // }
           /* if (Session::get('level')=='usuario'){
              $menu=array(
                  array('id'=>'inicio',
                      'titulo'=>'Inicio',
                      'enlace'=>BASE_URL
                  ),
                  array('id'=>'login',
                      'titulo'=>'Salir',
                      'enlace'=>BASE_URL.'login/cerrar'
                  ),
                  array('id'=>'usuario',
                      'titulo'=>'Acciones de uusario',
                      'enlace'=>BASE_URL.'acciones_usuario'
                  )

              );


            } */

          }
     /* else{


          $menu=array( array('id'=>'inicio',
              'titulo'=>'Inicio',
              'enlace'=>BASE_URL
          ),array('id'=>'login',
                  'titulo'=>'Iniciar Sesión',
                  'enlace'=>BASE_URL.'login'
              ), array('id'=>'contactenos',
              'titulo'=>'Contactenos',
              'enlace'=>BASE_URL.'contactos'
          ) );



      }*/

     $js1=array();
    if(count($this->_js1))
    {
        $js1=$this->_js1;
    }


      $_layoutParams=array(
        'ruta_css'=>BASE_URL.'/views/layout/'.DEFAULT_LAYOUT.'/css/',
          'ruta_img'=>BASE_URL.'/views/layout/'.DEFAULT_LAYOUT.'/img/',
          'ruta_js'=>BASE_URL.'/views/layout/'.DEFAULT_LAYOUT.'/js/',
          'ruta_fuente'=>BASE_URL.'/views/layout/'.DEFAULT_LAYOUT.'/fonts/',
          'menu'=>$menu,
          'js1'=>$js1
      );




      $rutaView=ROOT.'views'.DS.$this->_controlador.DS.$vista.'.phtml';
      if(is_readable($rutaView)){
          include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'header.php';
          include_once $rutaView;
          include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'footer.php';

      }
      else{
          throw new Exception('Error de vista: '.$rutaView);
      }
  }
// construccion  de la pagina de inicio
 public function render($vista)
 {// menu 
    $menu = array(
                       
                );
                            
    
     $js=array();
    if(count($this->_js))
    {
        $js=$this->_js;
    }
      
     

      
     $_layoutParams2 = array(
          'ruta_css' => BASE_URL . 'views/layout/' .'inicio'. '/css/',
          'ruta_img' => BASE_URL . 'views/layout/' . 'inicio' . '/img/',
          'ruta_js' => BASE_URL . 'views/layout/' . 'inicio' . '/js/',
          'ruta_public_css' => BASE_URL . 'public/css/',
          'ruta_public_js' => BASE_URL . 'public/js/',
          'ruta_public_img' => BASE_URL . 'public/img/',
          
          'menu'=>$menu,
          'js'=>$js
                       );



     $rutaView=ROOT.'views'.DS.$this->_controlador.DS.$vista.'.phtml';
      if(is_readable($rutaView)){
          include_once ROOT.'views'.DS.'layout'.DS.'inicio'.DS.'header.php';
          include_once $rutaView;
          include_once ROOT.'views'.DS.'layout'.DS.'inicio'.DS.'footer.php';

      }
      else{
          throw new Exception('Error de vista: '.$rutaView);
      }
  }

// fin de funcion Render

//funcion cargar java scrip de pagina de inicio
  public function setJs(array $js)
  {
      if(is_array($js)&&count($js))
      {
          for ($i=0;$i<count($js);$i++)
          {
              $this->_js[]=BASE_URL.'views/'.$this->_controlador.'/js/'.$js[$i].'.js';

          }
      }
      else
      {
          throw new Exception('Error de Js');
      }
  }

  //funcion cargar java scrip de pagina de Estudiante y profesor
  public function setJs1(array $js1)
  {
      if(is_array($js1)&&count($js1))
      {
          for ($i=0;$i<count($js1);$i++)
          {
              $this->_js1[]=BASE_URL.'views/'.$this->_controlador.'/js1/'.$js1[$i].'.js';

          }
      }
      else
      {
          throw new Exception('Error de Js');
      }
  }
}
  
