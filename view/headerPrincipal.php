<?php
require_once 'model/menu.php';

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Vimexi</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <!-- jquery-ui css -->
        <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Lobipanel css -->
        <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pace css -->
        <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Pe-icon -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- Themify icons -->
        <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="assets/dist/css/styleBD.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- End Theme Layout Style
        =====================================================================-->

        <link href="assets/plugins/NotificationStyles/css/demo.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-default.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-style-growl.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-style-attached.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-style-bar.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/NotificationStyles/css/ns-style-other.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="hold-transition sidebar-mini">

              <!-- Site wrapper -->
              <div class="wrapper">
                  <header class="main-header">
                      <a href="index.html" class="logo"> <!-- Logo -->
                          <span class="logo-mini">
                              <!--<b>A</b>BD-->
                              <!--<img src="assets/dist/img/mini-logo.png" alt="">-->
                          </span>
                          <span class="logo-lg">
                              <!--<b>Admin</b>BD-->
                              <!--<img src="assets/dist/img/logo.png" alt="">-->
                          </span>
                      </a>
                      <!-- Header Navbar -->
                      <nav class="navbar navbar-static-top">
                          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                              <span class="sr-only">Toggle navigation</span>
                              <span class="pe-7s-keypad"></span>
                          </a>
                          <div class="navbar-custom-menu">
                              <ul class="nav navbar-nav">
                                  <!-- Messages -->
                                  <li class="dropdown messages-menu">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                          <i class="pe-7s-mail"></i>
                                          <span class="label label-success">1</span>
                                      </a>
                                      <ul class="dropdown-menu">
                                          <li class="header">Tienes 1 mensaje(s)</li>
                                          <li>
                                              <ul class="menu">
                                                  <li><!-- start message -->
                                                      <a href="#">
                                                          <div class="pull-left"><img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image"></div>
                                                          <h4>Servicio pemdiente<small><i class="fa fa-clock-o"></i> 10 mins</small></h4>
                                                          <p>Revisar el servicio pendiente con...</p>
                                                      </a>
                                                  </li>
                                              </ul>
                                          </li>
                                          <li class="footer"><a href="#">Ver todos los mensajes</a></li>
                                      </ul>
                                  </li>
                                  <!-- settings -->
                                  <li class="dropdown dropdown-user">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                                      <ul class="dropdown-menu">
                                          <li><a href="profile.html"><i class="pe-7s-users"></i> Mi Perfil</a></li>
                                          <li><a href="#"><i class="pe-7s-settings"></i> Configuración</a></li>
                                          <li><a href="login.html"><i class="pe-7s-key"></i> Salir</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </nav>
                  </header>
                  <!-- =============================================== -->
                  <!-- Left side column. contains the sidebar -->
                  <aside class="main-sidebar">
                      <!-- sidebar -->
                      <div class="sidebar">
                          <!-- Sidebar user panel -->
                          <div class="user-panel text-center">
                              <div class="image">
                                  <img src="assets/dist/img/" class="img-circle" alt="User Image">
                              </div>
                              <div class="info">
                                  <p><!--Empresa--></p>
                                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                              </div>
                          </div>
                          <!-- sidebar menu -->
                          <ul class="sidebar-menu">
                              <li class="header">MENÚ</li>
                              <li>
                                  <a href="?c=Dashboard"><i class="ti-home"></i> <span>Dashboard</span></a>
                              </li>
                              <li class="treeview">
                                  <a href="#">
                                      <i class="ti-truck"></i><span>Servicios</span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="index.php?c=Servicio">Nuevo Servicio</a></li>
                                      <li><a href="index.php?c=Servicio&a=Consulta">Consultar Servicio</a></li>
                                  </ul>
                              </li>
                              <li class="treeview">
                                  <a href="#">
                                      <i class="fa fa-user"></i><span>Clientes</span>
                                  </a>
                                  <ul class="treeview-menu">
                                      <li><a href="index.php?c=Cliente">Nuevo Cliente</a></li>
                                      <li><a href="index.php?c=Cliente&a=Consulta">Consultar Clientes</a></li>
                                  </ul>
                              </li>


                              <!--<li class="header">STATUS</li>
                              <li><a href="#"><i class="fa fa-circle color-green"></i> <span>On Line</span></a></li>-->
                          </ul>
                      </div> <!-- /.sidebar -->
                  </aside>
                  <!-- =============================================== -->
                  <!-- Content Wrapper. Contains page content -->


                                  <!-- Content Header (Page header) -->
