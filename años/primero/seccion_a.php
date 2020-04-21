<?php 
session_start();
require '../../conexion.php';

$static=conexion()->prepare('select * from alumnos order by cedula asc');
    $static->execute();
    $resultado=$static->fetchall();



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>U.E | Jose Enrique Arias</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins

         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../datatables/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../../datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../datatables/responsive.dataTables.min.css">

    <link rel="stylesheet" href="../../css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../../img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../img/favicon.ico">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>U.E</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>U.E | Jose Enrique Arias</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->

              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">       
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <li>
              <a href="../../index.php">
                <i class="fa fa-tasks"></i> <span>Inicio</span>
              </a>
            </li>            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Notas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
                <ul class="treeview-menu">
                <li class="treeview">
                <a href="#">
                  <i class="fa fa-laptop"></i>
                  <span>Primer Año</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="../primero/Seccion_a.php"><i class="fa fa-circle-o"></i> Seccion  "A"</a></li>
                  <li><a href="../primero/Seccion_b.php"><i class="fa fa-circle-o"></i> Seccion  "B"</a></li>
                  <li><a href="../primero/Seccion_c.php"><i class="fa fa-circle-o"></i> Seccion  "C"</a></li>
                  <li><a href="../primero/Seccion_d.php"><i class="fa fa-circle-o"></i> Seccion "D"</a></li>
                  <li><a href="../primero/Seccion_f.php"><i class="fa fa-circle-o"></i> Seccion "F"</a></li>
                </ul>
              </li>
                </ul>
                <ul class="treeview-menu">
              <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Segundo Año</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../segundo/Seccion_a.php"><i class="fa fa-circle-o"></i> Seccion  "A"</a></li>
                <li><a href="../segundo/Seccion_b.php"><i class="fa fa-circle-o"></i> Seccion  "B"</a></li>
                <li><a href="../segundo/Seccion_c.php"><i class="fa fa-circle-o"></i> Seccion  "C"</a></li>
                <li><a href="../segundo/Seccion_d.php"><i class="fa fa-circle-o"></i> Seccion "D"</a></li>
                <li><a href="../segundo/Seccion_f.php"><i class="fa fa-circle-o"></i> Seccion "F"</a></li>
              </ul>
            </li>
              </ul>
              <ul class="treeview-menu">
              <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Tercer Año</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../tercero/Seccion_a.php"><i class="fa fa-circle-o"></i> Seccion  "A"</a></li>
                <li><a href="../tercero/Seccion_b.php"><i class="fa fa-circle-o"></i> Seccion  "B"</a></li>
                <li><a href="../tercero/Seccion_c.php"><i class="fa fa-circle-o"></i> Seccion  "C"</a></li>
                <li><a href="../tercero/Seccion_d.php"><i class="fa fa-circle-o"></i> Seccion "D"</a></li>
                <li><a href="../tercero/Seccion_f.php"><i class="fa fa-circle-o"></i> Seccion "F"</a></li>
              </ul>
            </li>
              </ul>
              <ul class="treeview-menu">
              <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Cuarto Año</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../cuarto/Seccion_a.php"><i class="fa fa-circle-o"></i> Seccion  "A"</a></li>
                <li><a href="../cuarto/Seccion_b.php"><i class="fa fa-circle-o"></i> Seccion  "B"</a></li>
                <li><a href="../cuarto/Seccion_c.php"><i class="fa fa-circle-o"></i> Seccion  "C"</a></li>
                <li><a href="../cuarto/Seccion_d.php"><i class="fa fa-circle-o"></i> Seccion "D"</a></li>
                <li><a href="../cuarto/Seccion_f.php"><i class="fa fa-circle-o"></i> Seccion "F"</a></li>
              </ul>
            </li>
              </ul>
              <ul class="treeview-menu">
              <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Quinto Año</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../quinto/Seccion_a.php"><i class="fa fa-circle-o"></i> Seccion  "A"</a></li>
                <li><a href="../quinto/Seccion_b.php"><i class="fa fa-circle-o"></i> Seccion  "B"</a></li>
                <li><a href="../quinto/Seccion_c.php"><i class="fa fa-circle-o"></i> Seccion  "C"</a></li>
                <li><a href="../quinto/Seccion_d.php"><i class="fa fa-circle-o"></i> Seccion "D"</a></li>
                <li><a href="../quinto/Seccion_f.php"><i class="fa fa-circle-o"></i> Seccion "F"</a></li>
              </ul>
            </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="title">Primer año seccion "A" </h1><br>
                          <a href="../../agregar.php" class="btn btn-success" ><i class="fa fa-plus-circle"></i> Agregar</a>
                          <a href="../../modificar.php" class="btn btn-primary" ><i class="fa fa-plus-circle"></i> Modificar</a>
                          <a href="../../eliminar.php" class="btn btn-warning" ><i class="fa fa-plus-circle"></i> Eliminar</a>
                          <a href="../../eliminar_todos.php" class="btn btn-danger" ><i class="fa fa-plus-circle"></i> Eliminar Todos</a>
                          <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" style="height: 400px;" id="listadoregistros">
                      <table id="tbllistado" class="table table-border table-striped table-bordered table-condensed table-hover">
                        <thead>
                          <th>C.I</th>
                          <th>Nombre</th>
                          <th>Primer lapto</th>
                          <th>segundo lapto</th>
                          <th>tercero lapto</th>
                          <th>Nota Final</th>
                        </thead>
                        <?php 
                        foreach ($resultado as $tabla ) {
                          echo '<tbody>';
                          echo  '<th>'.$tabla['Cedula'].'</th>';
                          echo  '<th>'.$tabla['Nombre'].'</th>';
                          echo  '<th>'.$tabla['Nota1'].'</th>';
                          echo  '<th>'.$tabla['Nota2'].'</th>';
                          echo  '<th>'.$tabla['Nota3'].'</th>';
                          echo  '<th>'.$final=($tabla['Nota3']+$tabla['Nota2']+$tabla['Nota1'])/3 .'</th>';
                          echo '</tbody>';
                        }

                        ?>
                       
                        <tfoot>
                          <th>C.I</th>
                          <th>Nombre</th>
                          <th>Primer lapto</th>
                          <th>segundo lapto</th>
                          <th>tercero lapto</th>
                          <th>Nota Final</th>
                        </tfoot>
                      </table>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2013-2017 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
    </footer>    
    <!-- jQuery 2.1.4 -->
    <script src="../../js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../js/app.min.js"></script>

    <script src="../../js/buttons.colVis.min.js"></script>
    <script src="../../js/buttons.html5.min.js"></script>
    <script src="../../js/dataTables.buttons.min.js"></script>
    <script src="../../js/jquery.dataTables.min.js"></script>

    
    <script src="../../js/jszip.min.js"></script>
    <script src="../../js/pdfmake.min.js"></script>
    <script src="../../js/vfs_fonts.js"></script>
  </body>
</html>