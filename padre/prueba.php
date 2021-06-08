<?php


if(isset($_POST['actualizar'])){
   echo $id=$_GET['id'];
   echo $nombre_1 = $_POST['nombre1'];
   echo  $nombre_2 = $_POST['nombre2'];
   echo $apellido_1 = $_POST['apellido1'];
   echo $apellido_2 = $_POST['apellido2'];
   echo $tipo_doc= $_POST['tipo_doc'];
   echo $doc = $_POST['doc'];
   echo $exp = $_POST['exp'];
   echo $fecha_nac= $_POST['fecha_nac'];
   echo $parentesco= $_POST['parentesco'];

   $query1="UPDATE laescuela.padre SET nombre_1='$nombre_1', nombre_2='$nombre_2',apellido_1='$apellido_1',apellido_2='$apellido_2',tipo_doc='$tipo_doc',documento_pad='$doc',expedicion='$exp',fecha_nac='$fecha_nac',parentesco='$parentesco' WHERE cod_padre=$id";
    pg_query($conn,$query1);
    
    header("Location:./padres.php");
}
?>