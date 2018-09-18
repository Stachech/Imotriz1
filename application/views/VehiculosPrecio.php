
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <ol class="breadcrumb">

        <li><a href="<?php echo base_url()?>Cinicio"><i class="fa fa-home"></i> Inicio</a></li>

        <li class="active"><i class="fa fa-automobile"></i> Listar Vehiculos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <h3>
       Vehiculos por rango de precio
      </h3>

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
         Datos Vehiculos

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Minimizar">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <table class="table table-bordered table-striped">
          <tr>
                <form action="CConsultarVehiculosPrecio" method="GET">
                <td>Precio Minimo</td>
                <td>
                  <input type="text" name="PrecioMinimo">
                </td>
                <td>Precio Maximo</td>
                <td>
                  <input type="text" name="PrecioMaximo">
                </td>

                <td>
                  <input type="submit" value="Buscar">
                </td>

                </form>
              </tr>
        </table>
        <div class="box-body">
        <div class="table-responsive">
          <table id="Usuarios" class="table table-bordered table-striped">

                <thead>
                <tr>
                  <th>Modelo</th>
                  <th>Marca</th>
                  <th>Color</th>
                  <th>Estado</th>
                  <th>Precio</th>
                  <th>Telefono del Vendedor</th>
                </tr>
                </thead>


                <?php
                   foreach($ListarVehiculosPrecio as $Datos)
                   {
                ?>
                      <tr>
                        <td><?php echo $Datos->vehmodelo; ?></td>
                        <td><?php echo $Datos->vehmarca; ?></td>
                        <td><?php echo $Datos->vehcolor; ?></td>
                        <td><?php echo $Datos->vehestado; ?></td>
                        <td><?php echo $Datos->vehprecio; ?></td>
                        <td><?php echo $Datos->datelefono; ?></td>
 
                      </tr>
                 <?php 
                    }
                    ?>
                </tbody>
                </table>
              </div>
        </div>  
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

