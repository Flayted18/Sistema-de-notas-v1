<?php 
session_start();
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
                    <div class="box-header with-border">
                    <h1 class="box-title">Bienvenido </h1><br>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" style="height: 400px;" id="listadoregistros">
                    <article>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat, pariatur! Atque laboriosam aperiam dolorum inventore incidunt nostrum iste deserunt, non aliquid sequi tenetur, provident a minima adipisci. Sunt, deserunt maiores!</article>
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