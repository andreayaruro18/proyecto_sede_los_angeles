<?php

require('../conexion.php');
  session_start();
  if (isset($_POST['guardar'])){

    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $doc = $_POST['doc'];
    $exp = $_POST['exp'];
    $fecha_nac = $_POST['fecha_nac'];
    $grado = $_POST['grado'];
    $doc_acu=$_POST['doc_acu'];
   

    $query="INSERT INTO laescuela.estudiante(nombre_1, nombre_2,apellido_1,apellido_2,documento_est,fecha_nac,grado,expedicion,documento_acudiente)
                                     VALUES ('$nombre1','$nombre2','$apellido1','$apellido2','$doc','$fecha_nac','$grado','$exp',$doc_acu)";
    $resultado=pg_query($conn,$query);

    if(!$resultado){
      die("Insercion fallida");
    }

    $_SESSION['message']='Guadado de forma exitosa';
    $_SESSION['message_type']='success';

    header("location:./estudiantes.php");
  }


?>