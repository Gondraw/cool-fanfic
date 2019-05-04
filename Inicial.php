<?php 
  
  session_start();
include "funcion.php";
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
}
ini_set ('error_reporting',0);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UFT-8">
	<title>Iniciar Sección</title>
	<link rel="stylesheet" type="text/css" href="style/csslogin.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="icon" type="image/png" href="style/favico.png">	
	<link rel="stylesheet" type="text/css" href="style1/style1.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		 <script type="text/javascript">
	 	$(function(){
			$("#boton").click(function(){

					 $.ajax({url: "Controller/usuariosController.php?Operacion=iniciarSession",
					 data: {
			            "usuario": $("#usuario").val(),
			            "contrasena": $("#contrasena").val()
			           
			          },

					  success: function(result){
					  	if(result["iniciocorrecto"]=="no"){
					  		alert("no se inicia sesion");

					  	}
					  	if(result["iniciocorrecto"]=="si"){
					  		alert("si se inicia sesion");
					  		window.location.href="index.php";
					  	}
					  	//alert("inicio  se sesion exitoso");

    					console.log("entro aqui ",result);
  				     }});
				});
	 
			})	

	 </script>
</head>
<body>
	<header>
		<nav>
		<ul>
			<li><a href="Index.php"><span class=""><i class="icon icon-home">Inicio</a></i></span></li>
			<li><a href="Subscriciones.php"><span class=""><i class="icon icon-price-tag">Subscriciones</a></i></span></li>
			<li><a href="Historias que me Gustan.php"><span class=""><i class=" icon icon-heart">Historias que me gustan</a></i></span></li>
			<li><a href="Mas leídas.php"><span class=""><i class=" icon icon-eye-plus">Mas leidas</a></i></span></li>
			<li><a href="Historial.php"><span class=""><i class=" icon icon-book">Historial</a></i></span></li>
			<li><a href="Categorias.php"><span class=""><i class=" icon icon-newspaper">Categorías</i></span></a></li>	
		</ul>
	</nav>
</header>	

<div id="inicial">
	<form>
		<h2>Inicial Sección:</h2>
		<input type="text" id="usuario" name="Usuario" placeholder="Usuario">
		<input type="password" id="contrasena" name="Contrasena" placeholder="Contraseña">
		<input type="button" name="botton" value="Entrar" id="boton">
		<a href="Registrate.php" id="nolisto">¿No estas Registrado?</a>
	</form>
</div>
</body>
</html>