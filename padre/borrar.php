<?php 
include('../conexion.php');
   
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $query ="DELETE FROM laescuela.padre WHERE cod_padre=$id"; 
        $resultado = pg_query($conn, $query);

        if(!$resultado){
           die("consulta fallida");
        }

        header("location:./padres.php");
    }




?>