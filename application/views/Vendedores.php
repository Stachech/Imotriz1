
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <ol class="breadcrumb">

        <li ><i class="fa fa-home"></i> <a href="<?php base_url() ?>Cinicio"> Inicio </a></li>


        <li class="active"><i class="glyphicon glyphicon-edit"></i> Vendedor </li>

      </ol>
    </section>



    

    <!-- Main content -->
    <section class="content">


      <h3>
      Vendedor
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

            <label>Nombres </label>

            <input type="text" name="Nombres" class="form-control" placeholder="Nombres"  value="<?php echo $Vendedor->datnombre; ?>" required>

          </div>

          <div class="form-group">

            <label>Apellidos</label>

            <input type="text" name="Apellidos" class="form-control"  placeholder="Apellidos"  value="<?php echo $Vendedor->datapellido; ?>" required>

          </div>


          <div class="form-group">

            <label>Telefono</label>

            <input type="text" name="Telefono" class="form-control"  placeholder="Telefono"  value="<?php echo $Vendedor->datelefono; ?>" required>

          </div>
        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

