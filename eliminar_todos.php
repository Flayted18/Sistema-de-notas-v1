<?php session_start();
require 'header.php';
?>



<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <h1 class="box-title">Eliminar Todos los datos de las seccion </h1><br>
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" style="height: 400px;" id="listadoregistros">
                      <form action="" method="POST">
                        <table class="table table-border table-striped table-bordered table-condensed table-hover">
                        <thead>
                          
                          <th><label for="Año">Seccion </label></th>
                          <th><select name="Seccion" id="seccion">
                          <option value="a">Seccion A</option>
                          <option value="b">Seccion B</option>
                          <option value="c">Seccion C</option>
                          <option value="d">Seccion D</option>
                          <option value="f">Seccion F</option>
                          </select></th>
                        </thead>  
                        <thead>
                          
                          <th><label for="Año">Año </label></th>
                          <th> <select name="año" id="año">
                          <option value="1">Primero</option>
                          <option value="2">Segundo</option>
                          <option value="3">Tercero</option>
                          <option value="4">Cuarto</option>
                          <option value="5">Quinto</option>
                          </select></th>
                        </thead>  
                        </table>
                        <center><label for="ok">Al continuar se borraran todos los datos de esta seccion </label>
                        <input id="ok" value="ok" name="ok"  type="checkbox"></center><br>
                        <a href="index.php" class="btn btn-danger" ><i class="fa fa-plus-circle"></i> Cancelar</a>

    
                        <a href="../../eliminar.php" style="float: right" class="btn btn-warning" "><i class="fa fa-plus-circle"></i> Eliminar</a >

                      </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

  <?php 
require 'footer.php';
?>