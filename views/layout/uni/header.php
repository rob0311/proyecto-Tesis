<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>

  <!-- Favicons -->
  <link href="<?php echo $_layoutParams['ruta_img'];?>favicon.png" rel="icon">
  <link href="<?php echo $_layoutParams['ruta_img'];?>apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $_layoutParams['ruta_css'];?>bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>bootstrap.css" rel="stylesheet">

  <!--external css-->
  <link href="<?php echo $_layoutParams['ruta_css'];?>font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo $_layoutParams['ruta_css'];?>style.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>styles.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>style-responsive.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>zabuto_calendar.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>jquery.gritter.css " rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>miEstilo.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $_layoutParams['ruta_css'];?>sweetalert2.css">
  
  <!-- Modernizer Script for old Browsers   -->
  <script src="<?php echo $_layoutParams['ruta_js'];?>jquery-3.1.1.min.js"></script>
 
</head>
<body>                                                                                                                   
  <section id="container">
    <!--header start-->
     <header  class="header black-bg">
        <div class="sidebar-toggle-box ">
           <div class="fa fa-bars tooltips " data-placement="right" data-original-title="Toggle Navigation"></div>
       </div>
      <!--logo start-->
      <a href="<?php echo BASE_URL.'index';?>" class="logo hidden-xs"><b><span>UNAN LEON </span></b></a>
      <!--logo end-->
        <!--Notificaciones-->
     <div class="nav notify-row hidden-xs" id="top_menu">
        <!--  notification start -->
          <ul class="nav top-menu">
          <!-- settings start -->
            <li class="dropdown">
             <form class="form-search content-search navbar-form" action=" " method="post">
               <div class="input-group">
                 <input  placeholder="Buscar" class="form-control form-text" type="text" size="40" name="" />
                 <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
                </button>    
                </span>
              </div>
            </form>
          </li>
        <!--fin de caja de Busqueda-->
         </ul>
    </div>
   <div class="top-menu">
       <ul class="nav pull-right top-menu">
         <li><a class="logout" href="<?php echo BASE_URL . 'index/cerrar/' ; ?>"> Cerrar seccion</a></li>
         <li><a  class="logout" href="<?php echo BASE_URL . 'student/perfil/' ; ?>"><i class="fa fa-user fa-1x "></i>  Perfil de usuario</a></li>
      </ul>
  </div>
    
   </header>
    <!--header end-->
      <aside>
        <div id="sidebar" class="nav-collapse">
      <!-- sidebar menu start
           Menu izquierdo-->
     <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="<?php echo BASE_URL . 'student/perfil/' ;?>">
          <img src="<?php echo $_layoutParams['ruta_img'];?>user.png" class="img-circle" width="80"></a>
          </p>
        <h5 class="centered"><?php echo Session::get("nombre_estudiante"); ?></h5>
        <div class="user-text-online">
          <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
        </div>

        <li class="mt">
            <a class="active" href="<?php echo BASE_URL . 'student/index/'; ?>">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
            </a>
        </li>
        
        <li>
             <a href="#">
             <i class="fa fa-question"></i>
             <span>Preguntas </span>
             </a>
        </li>

        <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa fa-list-alt"></i>
            <span>Ver Calificaciones</span>
            </a>
        </li>

        <li class="sub-menu">
            <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span>Clases</span>
            </a>
           <ul class="sub">
              <li><a href="form_component.html">Agregar Nueva clase</a></li>
              <li><a href="advanced_form_components.html">Historial de clases</a></li>
              <li class="sub-menu">
          <a href="javascript:;">
             <i class="fa fa-th"></i>
             <span>Trabajos de Clases</span>
             </a>
          <ul class="sub">
             <li><a href="basic_table.html">Recibidos</a></li>
             <li><a href="responsive_table.html">Enviar</a></li>
         </ul>
           </li>
           </ul>
      </li>
        
       <li>
            <a href="#">
            <i class="fa fa-envelope"></i>
            <span>invitacion </span>
            <span class="label label-theme pull-right mail-info">2</span>
            </a>
      </li>
        
      <li>
           <a href="#">
           <i class="fa fa-map-marker"></i>
           <span>Configuracion </span>
           </a>
      </li>
  </ul><!-- sidebar menu end-->
</div>
</aside>
 
            
                 
    

