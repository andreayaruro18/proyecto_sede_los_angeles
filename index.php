<?php
	
	require "conexion.php";
	
	session_start();
	
    if(!empty($_POST['correo']) && !empty($_POST['clave'])){
		
		$email = $_POST['correo'];
		$password = $_POST['clave'];
		
		$sql = "SELECT * FROM laescuela.docente WHERE correo='$email'";
		//echo $sql;
		$resultado=pg_query($conn, $sql);
		$row = pg_fetch_array($resultado);// para traer los datos en un array 
	
		if ($row) {//para validar si nos trajimos datos de la base de datos 
			if ($email == $row['correo'] && $password == $row['clave']) {//comparamos los datos 
				$_SESSION['id'] = $row['cod_docente'];
				$_SESSION['nombre'] = $row['nombre_1'];
				
				header("Location: principal.php");
			}else {
				echo "La contraseña no coincide";
				
				}	
		} else {
			echo "NO existe usuario";
		}
		
		
		
	}
	
	
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Interfaz 1</title>
        <link href="assets/css/styleLogin.css" rel="stylesheet" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
    <body>
    <div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>CENTRO EDUCATIVO RURAL SAN SEBASTIAN</h2>
			<p>SEDE LOS ANGELES</p>
		</div>
							
		<div class="white-panel">
            <form action="index.php" method="POST">
			<div class="login-show">
				<h2>LOGIN</h2>
				<input type="text" placeholder="Email" name="correo">
				<input type="password" placeholder="Password" name="clave">
				<div><button type="submit" class="btn btn-secondary">Login</button></div>
				<a href="">Forgot password?</a>
			</div>
            </form>
			<div class="register-show">
				<h2>REGISTER</h2>
				<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="password" placeholder="Confirm Password">
				<input type="button" value="Register">
			</div>
		</div>
	</div>
    <script> 

$(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
    </script>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
	</body>
</html>
