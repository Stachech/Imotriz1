<!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" href="CInicio">Menu Principal</li>

        <li>
          <a href="CInicio">
            <i  class="fa fa-home"></i> <span>Inicio</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-list"></i> <span>Vehiculos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <?php 
              if ($this->session->userdata('RolTipo')=='Vendedor' OR $this->session->userdata('RolTipo')=='AmbosV' OR $this->session->userdata('RolTipo')=='Ambos'  ) 
              {
            ?>

            <li><a href="CRegistrarVehiculo"><i class="glyphicon glyphicon-search"></i> Registrar Vehiculo</a></li>

            <?php
            }
            ?>

            <?php 
              if ($this->session->userdata('RolTipo')=='Cliente' OR $this->session->userdata('RolTipo')=='AmbosC') 
              {
            ?>

              <li><a href="CConsultarVehiculos"><i class="glyphicon glyphicon-search"></i> Consultar Vehiculos</a></li>
              <li><a href="CConsultarVehiculosPrecio?PrecioMinimo=0&PrecioMaximo=0"><i class="glyphicon glyphicon-search"></i> Consultar Vehiculos por precio</a></li>

            <?php
              }
             ?>

            

          </ul>
        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>