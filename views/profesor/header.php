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
  
  <!-- Modernizer Script for old Browsers   -->
  <script src="<?php echo $_layoutParams['ruta_js'];?>jquery-3.1.1.min.js"></script>
  <!-- Menu Toggle Script -->
 
</head>
<body>                                                                                                                   
  <section id="container">
    <!--header start-->
     <header  class="header black-bg">

      <!--logo start-->
      <a href="<?php echo BASE_URL.'index';?>" class="logo"><b><span>UNAN LEON </span></b></a>
      <!--logo end-->
        <!--Notificaciones-->
     <div class="nav notify-row" id="top_menu">
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
   <div class="top-menu" id="menu">
       <ul class="nav pull-right top-menu">
         <li><a class="logout" href="<?php echo BASE_URL . 'index/cerrar/' ; ?>"> Cerrar sesión</a></li>
         <li><p class="centered"><a href="<?php echo BASE_URL . 'profesor/perfil/' ;?>">
          <img src="<?php echo $_layoutParams['ruta_img'];?>user.png" class="img-circle" width="50"></a>
          </p>
        <h5 class="centered"><?php echo Session::get("nombre_profesor"); ?></h5></li>
         </ul>
  </div>
    
   </header>
  </section>
    <!--header end-->
     