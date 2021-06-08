<?php 
include('../conexion.php');
   
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $query ="DELETE FROM laescuela.estudiante WHERE cod_estudiante=$id"; 
        $resultado = pg_query($conn, $query);

        if(!$resultado){
           die("consulta fallida");
        }

        header("location:../estudiante/estudiantes.php");
    }




?>