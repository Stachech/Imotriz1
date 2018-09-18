
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <ol class="breadcrumb">

        <li ><i class="fa fa-home"></i> <a href="<?php echo base_url()?>Cinicio"> Inicio </a></li>

        <li class="active"><i class="fa fa-automobile"></i> Nuevo Vehiculo </li>

      </ol>
    </section>

   

    <!-- Main content -->
    <section class="content">

      <h3>
       Registrar Vehiculo
      </h3>

    <?php 
      if ($this->session->flashdata('Mensaje')) 
      {
    ?>
      <div class="alert alert-warning alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <h4><i class="icon fa fa-info"></i> Alerta!</h4>
       La placa que intenta ingresar ya se encuentra registrada.
      </div>
      <?php
    }elseif ($this->session->flashdata('Registro')) 
    {
    ?>

    <div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <h4><i class="icon fa fa-info"></i> Alerta!</h4>
       Registro Exitoso.
      </div>
    <?php 
    }

    ?>


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Datos del Vehiculo</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Minimizar">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">

          <div class="form-group">
            <form method="POST" action="CRegistrarVehiculo/RegistrarVehiculo" autocomplete="off">

            <label>Modelo</label>

            <input type="text" name="Modelo" class="form-control" placeholder="Modelo"  >

          </div>

          <div class="form-group">

            <label>Color</label>

            <input type="text" name="Color" class="form-control" placeholder="Color"  >

          </div>

          <div class="form-group">

            <label>Placa</label>

            <input type="text" name="Placa" class="form-control" placeholder="Placa"  required>

          </div>

          <div class="form-group">

            <label>Estado</label>

            <select name="Estado" class="form-control">
              <option>Nuevo</option>
              <option>Usado</option>
            </select>

          </div>

          <div class="form-group">

            <label>Precio</label>

            <input type="text" name="Precio" class="form-control" placeholder="Precio" >

          </div>

           <div class="form-group">

            <label>Marca</label>

            <input type="text" name="Marca" class="form-control" placeholder="Precio" >

          </div>

          <div class="form-group">

            <label>Categoria</label>

            <select name="Categoria" class="form-control" >

              <?php
               foreach ($Categoria as $Datos) 
               {
              ?>        
                      <option value="<?php echo $Datos->catid ?>"><?php echo $Datos->catipo; ?></option>
              <?php
                }
              ?>
           </select>

          </div>


          <div class="form-group">

            <input type="submit"  class="btn btn-block btn-info btn-lg" value="Registrar Vehiculo">
            </form>
          </div>

        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

