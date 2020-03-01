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
  
  <!-- Modernizer Script for old Browsers   -->
  <script src="<?php echo $_layoutParams['ruta_js'];?>jquery.min.js"></script>
</head>
<body>                                                                                                                                                                                                                                                                 
  <section id="container">
    <!--header start-->
    <header  class="header black-bg">
  
      <div class="sidebar-toggle-box ">
        <div class="fa fa-bars tooltips " data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
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
            </span>
          </div>
        </form>
      </li>
        <!--fin de caja de Busqueda-->



          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-camera-retro"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
       <!--Fin de las notificaciones-->  

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
        <p class="centered"><a href="<?php echo BASE_URL . 'student/perfil/' ;?>"><img src="<?php echo $_layoutParams['ruta_img'];?>user.png" class="img-circle" width="80"></a></p>
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
      <a href="#" data-toggle="modal" data-target="#myModal1">
         <i class="fa fa-book"></i>
            <span>Marcar Asistencia </span>
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
        <li>
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
      </ul>
      
      <!-- sidebar menu end-->
    </div>
  
    
  </aside>
 
            
                  </div>
                </div>
              </div>
            </div>
    

