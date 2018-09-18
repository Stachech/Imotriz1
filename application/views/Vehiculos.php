
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
       Vehiculos
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
                  <th>Categoria</th>
                  <th>Datos del Vendedor</th>
                </tr>
                </thead>


                <?php
                   foreach($ListarVehiculos as $Datos)
                   {
                ?>
                      <tr>
                        <td><?php echo $Datos->vehmodelo; ?></td>
                        <td><?php echo $Datos->vehmarca; ?></td>
                        <td><?php echo $Datos->vehcolor; ?></td>
                        <td><?php echo $Datos->vehestado; ?></td>
                        <td><?php echo $Datos->vehprecio; ?></td>
                        <td><?php echo $Datos->catipo; ?></td>

                        <td align="center">
                          <form action="CConsultarVendedor" method="POST" target="_BLANK">

                            <input type="hidden" name="id" value="<?php  echo $Datos->datid_id ?>">
                            
                            <button type="submit" class="btn btn-info">Ver Datos del Vendedor</button>

                          </form>
                        </td>
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

