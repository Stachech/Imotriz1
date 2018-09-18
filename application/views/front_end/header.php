<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Menú Principal </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php base_url()?>CInicio" class="logo">

      <span class="logo-mini"><b>I</b>M</span>
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <b>Imotriz</b>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>

      </a>
      <?php 
        if ($this->session->userdata('RolTipo')=='Ambos' OR $this->session->userdata('RolTipo')=='AmbosC' OR $this->session->userdata('RolTipo')=='AmbosV') 
        {
      ?>    
          <div class="pull-left">
            <a href="CCambioCliente" class="btn btn-default btn-flat" >Cliente</a>
           </div>

          <div class="pull-left">
            <a href="CCambioVendedor" class="btn btn-default btn-flat">Vendedor</a>
          </div>
      <?php
        }
       ?>
      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
              <span class="hidden-xs"><?php echo $this->session->userdata('Nombres')." ".$this->session->userdata('Apellidos'); ?></span>

            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              
              <li class="user-header">
                <h3>
                 <?php echo $this->session->userdata('Nombres').$this->session->userdata('Apellidos'); ?>
                </h3>

                <?php 
                  if ($this->session->userdata('RolTipo')=='Ambos' OR $this->session->userdata('RolTipo')=='AmbosC' OR $this->session->userdata('RolTipo')=='AmbosV') 
                  {
                ?>
                    <p>
                      Vendedor y Cliente
                    </p>
                <?php
                  }else{ 
                 ?>
                <p>
                 <?php echo $this->session->userdata('RolTipo'); ?>
                </p>
                <?php 
                   }
                 ?>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="CPerfil" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="CLogin/SignOut" class="btn btn-default btn-flat">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</html>