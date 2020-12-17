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
  <link href="<?php echo $_layoutParams['ruta_css'];?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo $_layoutParams['ruta_css'];?>style.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>styles.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>style-responsive.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>zabuto_calendar.css" rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>jquery.gritter.css " rel="stylesheet">
  <link href="<?php echo $_layoutParams['ruta_css'];?>miEstilo.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $_layoutParams['ruta_css'];?>sweetalert2.css">
 
 
 
  <!-- Paginacion  -->
    <script src="<?php echo $_layoutParams['ruta_js'];?>jquery-3.1.1.min.js"></script>
     <link rel="stylesheet" href="<?php echo $_layoutParams['ruta_css'];?>datatables/datatables.min.css">
     <script src="<?php echo $_layoutParams['ruta_js'];?>datatables/datatables.min.js"></script>
<script type="text/javascript">
  if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}
</script>
  
</head>
<body>     
<header>
      <div class="container">
        <div class="row ">
           <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                <!--logo start-->
      <a href="<?php echo BASE_URL.'index';?>" class="logo"><b><span>UNAN LEON </span></b></a>
      <!--logo end-->
                 </div>
           <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 centrar ">
               <div class="top-menu" id="menu">
       <ul class="nav pull-right top-menu">
         <li><a class="logout" href="<?php echo BASE_URL . 'index/cerrar/' ; ?>"> Cerrar sesión</a></li>
         <li><p class="centered"><a href="<?php echo BASE_URL . 'profesor/perfil/' ;?>">
          <img src="<?php echo $_layoutParams['ruta_img'];?>user.png" class="img-circle" width="50"></a>
          </p>
        <h5 class="centered"><?php echo Session::get("nombre_profesor"); ?></h5></li>
         </ul>
  </div>
                   </div>
           
        </div>
    </div>
 </header>     

<nav class="navbar navbar-default navbar navbar-inverse navbar-fixed-butom role=navigation">
 <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
      data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">cambiar navegacion</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">SACUR </a>
    </div><!-- /fin de la clase navbar-header -->
  <div id="navbar" class="navbar-collapse collapse">
     <ul class="nav  nav-pills ">
        <li class="active "><a href="index.php">Inicio</a></li>
        <li  class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Asignaturas<b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="<?php echo BASE_URL.'profesor/asignaturas'?>">Ver Todas</a></li>
               <li><a data-toggle="modal" href="#" data-target="#NuevaAsignatura">Agregar Nueva Asignatura</a></li>
            </ul>
        </li><!-- /fin de publicar -->
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Calificaciones<b class="caret"></b></a>
            <ul class="dropdown-menu">
               <li><a href="tutoriales.php">VER todo</a></li>
               <li><a href="problema.php">agregar Nueva</a></li>
            </ul>
        </li><!-- /fin de ayuda -->
        <li><a href="conf.php">Informes</a></li>
         <li><a href="conf.php">Preguntas</a></li>
          <li><a href="conf.php">Trabajos de Clases</a></li>
     </ul> <!-- /fin de clase "nav navbar-nav -->
  </div> <!-- /fin de clase collapse navbar-collapse navbar-ex1-collapse -->  

     <form action="resul_bus.php" class="navbar-form navbar-left">
        <div class="form-group">
            <input type="search" required class="form-control"></div>  
        <button type="submit" class="btn btn-default">Buscar </button>   
        
      </form> 
      </div>
 </nav>
  
    <!--header end-->


 
  
     