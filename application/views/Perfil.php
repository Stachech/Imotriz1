
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <ol class="breadcrumb">

        <li ><i class="fa fa-home"></i> <a href="<?php base_url() ?>Cinicio"> Inicio </a></li>


        <li class="active"><i class="glyphicon glyphicon-edit"></i> Actualizar Mi Perfil </li>

      </ol>
    </section>



    

    <!-- Main content -->
    <section class="content">

          <?php 
      if ($this->session->flashdata('Actualizado')) 
      {
    ?>
      <div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       <h4><i class="icon fa fa-info"></i> Alerta!</h4>
       Actualizacion Exitosa.
      </div>
      <?php
    }
    ?>

      <h3>
       Actualizar mi Perfil
      </h3>

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Minimizar">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">

          <div class="form-group">
            <form method="GET" action="CPerfil/Actualizar">

            <label>Nombres </label>

            <input type="text" name="Nombres" class="form-control" placeholder="Nombres"  value="<?php echo $Perfil->datnombre; ?>" >

          </div>

          <div class="form-group">

            <label>Apellidos</label>

            <input type="text" name="Apellidos" class="form-control"  placeholder="Apellidos"  value="<?php echo $Perfil->datapellido; ?>" >

          </div>


          <input type="hidden" name="id" value="<?php echo $Perfil->datid; ?>" >

          <div class="form-group">

            <label>Identificacion</label>

            <input type="text" name="Celular" class="form-control"  placeholder="Celular"  value="<?php echo $Perfil->datnumeroid; ?>" readonly>

          </div>

          <div class="form-group">

            <label>Telefono</label>

            <input type="text" name="Telefono" class="form-control"  placeholder="Telefono"  value="<?php echo $Perfil->datelefono; ?>" >

          </div>


          <div class="form-group">

            <label>Correo Electrónico</label>

            <input type="email" name="CorreoElectronico" class="form-control"  placeholder="Correo Electronico" minlength="10" maxlength="60" value="<?php echo $Perfil->datcorreo; ?>" required>

          </div>

          <div class="form-group">

            <input type="submit"  class="btn btn-block btn-success enable" value="Actualizar">
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

