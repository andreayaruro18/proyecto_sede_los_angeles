<?php 

include("../conexion.php");


if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query="SELECT * FROM laescuela.estudiante where cod_estudiante=$id";
    $resul=pg_query($conn,$query);

    if(pg_num_rows($resul)==1){
        $row=pg_fetch_array($resul);
        $nombre1 = $row['nombre_1'];
        $nombre2 = $row['nombre_2'];
        $apellido1 = $row['apellido_1'];
        $apellido2 = $row['apellido_2'];
        $doc = $row['documento_est'];
        $exp = $row['expedicion'];
        $fecha_nac = $row['fecha_nac'];
        $grado = $row['grado'];
        $doc_acu=$row['documento_acudiente'];
    }else{
        echo 'ups!, tenemos problemas';
    }

}
if(isset($_POST['actualizar'])){
    $id=$_GET['id'];
    $nombre_1 = $_POST['nombre1'];
    $nombre_2 = $_POST['nombre2'];
    $apellido_1 = $_POST['apellido1'];
    $apellido_2 = $_POST['apellido2'];
    $docu = $_POST['doc'];
    $expe = $_POST['exp'];
    $fecha_naci = $_POST['fecha_nac'];
    $grado_est = $_POST['grado'];
    $doc_acu=$_POST['doc_acu'];
   
    $query1="UPDATE laescuela.estudiante SET nombre_1='$nombre_1', nombre_2='$nombre_2',apellido_1='$apellido_1',apellido_2='$apellido_2',documento_est='$docu', fecha_nac='$fecha_naci',grado='$grado_est',expedicion='$expe', documento_acudiente='$doc_acu' WHERE cod_estudiante=$id";
    pg_query($conn,$query1);
   
    header("Location:./estudiantes.php");
}



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
    <title>BRILLIANT Free Bootstrap Admin Template - WebThemez</title>
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
            <!--formulario-->
                <div class="row">
                        <div class="col-xs-12">					
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Datos del estudiante</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="form-row" action="editar.php?id=<?php echo $_GET['id']?> " method="POST">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputName2">Primer Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Ingresa el primer nombre" name="nombre1" value="<?php echo $nombre1 ;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Segundo Nombre</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Ingresa el segundo nombre(opcional)" name="nombre2" value="<?php echo $nombre2 ;?>">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Primer Apellido</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Ingresa el primer apellido" name="apellido1" value="<?php echo $apellido1 ;?>">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Segundo Apellido</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Ingresa tu segundo apellido" name="apellido2" value="<?php echo $apellido2 ;?>">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Documento</label>
                                                <input type="number" class="form-control" id="exampleInputEmail2" placeholder="Ingresa el doc del alumno" name="doc" value="<?php echo $doc ;?>">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Expedicion</label>
                                                <input type="text" class="form-control" id="exampleInputEmail2" name="exp" placeholder="Lugar de expedicion" value="<?php echo $exp ;?>">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Fecha de nacimiento</label>
                                                <input type="date" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com" name="fecha_nac" value="<?php echo $fecha_nac ;?>">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Grado</label>
                                                <input type="number" class="form-control" id="exampleInputEmail2" placeholder="ingresa el grado" name="grado" value="<?php echo $grado;?>">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail2">Documento del acudiente</label>
                                                <input type="number" class="form-control" id="exampleInputEmail2" placeholder="documento del acudiente" name="doc_acu" value="<?php echo $doc_acu;?>">
                                            </div>
                                         </div>
                                        <button type="submit" class="btn btn-success btn-block" name="actualizar">Actualizar</button>   
                                    </form>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>

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

