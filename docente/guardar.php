<?php
require('../conexion.php');
  session_start();
  if (isset($_POST['guardar'])){

    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $doc = $_POST['doc'];
    $titulo = $_POST['titulo'];
    $telefono = $_POST['telefono'];
    $fecha_ini = $_POST['fecha_ini'];
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
   

    $query="INSERT INTO laescuela.docente(doc_docente, nombre_1, nombre_2,apellido_1,apellido_2,titulo,telefono,fecha_inicio,correo,clave)
                                     VALUES ($doc,'$nombre1','$nombre2','$apellido1','$apellido2','$titulo','$telefono','$fecha_ini','$correo',$clave)";
    $resultado=pg_query($conn,$query);

    if(!$resultado){
      die("Insercion fallida");
    }

    header("location:./docentes.php");
  }


?>