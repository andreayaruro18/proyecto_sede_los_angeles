<?php
	
	require('../conexion.php')
	
	
	
?>
<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Docentes</title>
    <!-- Bootstrap Styles-->
    
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
    <!--boostrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../principal.php"><strong><i class="fas fa-school"></i> LOS ANGELES</strong></a>
				
		<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="ui-elements.html"><i class="fa fa-desktop"></i> UI Elements</a>
                    </li> 
					 
					 <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="chart.html">Charts JS</a>
                            </li>
                            <li>
                                <a href="morris-chart.html">Morris Chart</a>
                            </li>
							</ul>
						</li>	
							
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
                    </li>
                    
                    <li>
                        <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                <h1 class="page-header">
                     Dashboard <small></small>
                </h1>
				<ol class="breadcrumb">
				<li><a href="../principal.php">Inicio</a></li>
				<li><a href="./docentes.php">Docentes</a></li>
				<li class="active"></li>
				</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>Estudiantes</h3>
								<small>Registro</small>
							</h3>
                            <a href="../estudiante/estudiantes.php"><div><button  type="submit" class="btn btn-secondary"><i class="fas fa-user-shield fa-4x"></i></button></div> </a>
						</div>

                        </div>
						</div>
                    </div>
					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>Padres</h3>
								<small>Registro</small>
							</h3> 
                            <a href="../padre/padres.php"><div><button  type="submit" class="btn btn-secondary"><i class="fas fa-user-tie fa-4x"></i></button></div> </a>
						</div>
						
		 
                        </div>
						</div>
                    </div>
					
					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>Matricula</h3>
								<small>Registro</small>
							</h3> 
                            <a href="#"><div><button  type="submit" class="btn btn-secondary"><i class="far fa-clipboard fa-4x"></i></button></div> </a>
						</div> 
						
                        </div>
						</div>
                    </div>
					
					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>Docentes</h3>
								<small>Registro</small>
							</h3> 
                            <a href="docentes.php"><div><button  type="submit" class="btn btn-secondary"><i class="fa fa-user fa-4x"></i></button></div> </a>
						</div>
						
                        </div>
						</div>
                    </div>


				   
                </div>

                <!--formulario-->
                <div class="row">
                        <div class="col-xs-12">					
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Datos del Docente</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="form-row" action="guardar.php" method="POST">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputName2">Primer Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Ingresa el primer nombre" name="nombre1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Segundo Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Ingresa el segundo nombre(opcional)" name="nombre2">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Primer Apellido</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Ingresa el primer apellido" name="apellido1">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Segundo Apellido</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Ingresa el segundo apellido" name="apellido2">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Documento</label>
                                                <input type="number" class="form-control" id="exampleInputEmail2" placeholder="Ingresa el doc del docente" name="doc">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Titulo</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" name="titulo" placeholder="Ingresa el titulo">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">telefono</label>
                                                <input type="number" class="form-control" id="exampleInputEmail2" name="telefono" placeholder="Ingresa el telefono">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Fecha de inicio</label>
                                                <input type="date" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com" name="fecha_ini">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Correo</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" name="correo" placeholder="Ingresa el correo">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Clave</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="ingresa la clave" name="clave">
                                            </div>
                                         </div>
                                        
                                        <button type="submit" class="btn btn-success btn-block" name="guardar">Guardar</button>   
                                    </form>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
               <!--tablas-->
               
               <div class="panel-heading panel">
                             Lista de Docentes
                        </div>
                        <div class="panel-body panel">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Documento</th>
                                            <th>telefono</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $query="SELECT * FROM laescuela.docente";
                                            $resultado = pg_query($conn, $query);
                                            while($row = pg_fetch_array($resultado)){ ?> 

                                            <tr class="odd gradeX">
                                            <td><?php echo $row['nombre_1']?></td>
                                            <td><?php echo $row['apellido_1']?></td>
                                            <td><?php echo $row['doc_docente']?></td>
                                            <td><?php echo $row['telefono']?></td>
                                            <td>
                                            <a href="../docente/editar.php?id=<?php echo $row['cod_docente'] ?>" class="btn btn-warning">
                                            <i class="fas fa-user-edit"></i>
                                            </a>
                                            </td>
                                            </tr> 
                                        
                                        <?php }?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    

    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
   
    <!-- jQuery Js -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
	 <!--font aweson -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
	
	
	<script src="../assets/js/easypiechart.js"></script>
	<script src="../assets/js/easypiechart-data.js"></script>
	
	 <script src="../assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="../assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="../assets/js/chartjs.js"></script> 
    <!--tables-->
     <!-- DATA TABLE SCRIPTS -->
     <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
     <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
     <!-- Custom Js -->
     <script src="../assets/js/custom-scripts.js"></script>
</body>

</html>