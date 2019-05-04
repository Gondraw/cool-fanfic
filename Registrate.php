<?php 
  
  session_start();
  include "funcion.php";

ini_set ('error_reporting',0);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UFT-8">
	<title>Registrate</title>
	<link rel="stylesheet" type="text/css" href="style/cssregister.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="icon" type="image/png" href="style/favico.png">
	<link rel="stylesheet" type="text/css" href="style1/style1.css">
	 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	 	

	 <script type="text/javascript">
	 	$(function(){
			$("#boton").click(function(){

					 $.ajax({url: "Controller/usuariosController.php?Operacion=registroUsuario",
					 data: {
			            "nombre": $("#nombre").val(),
			            "apellido": $("#apellido").val(),
			             "usuario": $("#usuario").val(),
			              "correo": $("#correo").val(),
			               "contrasena": $("#contrasena").val(),
			                "repetir": $("#repetir").val(),
			          },

					  success: function(result){
					  	alert("registro exitoso");
					  	window.location.href="Inicial.php";

    					//console.log("entro aqui ",result);
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

<div id="formulario">
	<form method="POST" >-->
		<h2>Registrate:</h2>
		<input type="text" id="nombre" name="nombre" placeholder="Nombre" value="">
		<input type="text"  id="apellido"  name="apellido" placeholder="Apellido" value="">
		<input type="text" id="usuario"  name="usuario" placeholder="Usuario" value="">
		<input type="email"  id="correo"name="correo" placeholder="Correo Electronico">
		<input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
		<input type="password" id="repetir" name="repetir" placeholder="Repetir Contraseña">
		<input type="submit" name="submit" value="registrate" id="boton">
		<a href="Inicial.php" id="listo">¿Ya estas Registrado?</a>
		<p></p>
				
	</form>-->
</div>                                                                             
	<div id="pie">
		 <a href="Preguntas Frecuentes.php" id="link">Preguntas Frecuentes</a>
        <a href="" id="link">Comunidad</a>
        <a href="Sobre Nosotros.php" id="link">Sobre Nosotros</a>
        <a href="Contactenos.php" id="link">Contactenos</a>
        <a href="" id="link">Sitios Web</a>
		<hr color="#C10000" size="4"><style type="text/css">hr {border: 0; height: 0; box-shadow: 0 2px 6px 5px #C10000; margin-top:10px; } </style>
		<div id="derechos">
			<footer>
				<p>Cool Fanfic- Todos los derechos reservados 2019©</p>
			</footer>
			
		</div>
		   	


</body>
</html>