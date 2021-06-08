<?php

require('../conexion.php');
  session_start();
  if (isset($_POST['guardar'])){

    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $tdoc= $_POST['Tdoc'];
    $doc = $_POST['doc'];
    $exp = $_POST['exp'];
    $fecha_nac = $_POST['fecha_nac'];
    $parentesco = $_POST['parentesco'];
   

    $query="INSERT INTO laescuela.padre(nombre_1, nombre_2,apellido_1,apellido_2,tipo_doc,documento_pad,expedicion,fecha_nac,parentesco)
                                     VALUES ('$nombre1','$nombre2','$apellido1','$apellido2','$tdoc','$doc','$exp','$fecha_nac','$parentesco')";
    $resultado=pg_query($conn,$query);

    if(!$resultado){
      die("Insercion fallida");
    }

    header("location:./padres.php");
  }


?>