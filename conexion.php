<?php
	try{

	$conn=pg_connect("host=localhost port=5432 dbname=escuela user=postgres password=Yeloyana");
	}catch (Exception $e){
		die('chao'.$e);

	}
	
?>