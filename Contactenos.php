<?php 
  
  session_start();
include "funcion.php";
if (isset($_SESSION['usuario'])) {
    header("Location: Login.php");
}
ini_set ('error_reporting',0);

?>



<!DOCTYPE html>
<html>
<head>
	<title>Contactenos</title>
	<link rel="stylesheet" type="text/css" href="style/csscontact.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="icon" type="image/png" href="style/favico.png">	
	<link rel="stylesheet" type="text/css" href="style1/style1.css">		
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
	<form action="">
		<h2>Contactenos:</h2>
		<input type="text" name="Usuario" placeholder="Usuario">
		<input type="email" name="Correo" placeholder="Correo">
		<textarea placeholder="Escribe tu Pregunta:"></textarea>
		<input type="button" name="botton" value="Enviar" id="boton">
	</form>
	
	
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