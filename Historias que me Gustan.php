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
	<title>Historias que me gustan</title>
	<link rel="stylesheet" type="text/css" href="style/cssmegustan.css">
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
<br>
	<div id="fondo">
	<a href="Index.php"><img src="images/coolf.png" id="logo"></a>
		<input type="text" id="campo" placeholder="Buscar">
		<input type="button" id="buscar" value="Buscar">
		<a href="perfil.php" id="perf">Mi perfil</a>
		<a href="Editar.php" id="perf1">Editar Perfil</a>
        <a href="" id="perf2">Salir</a>
<div id="subir"> <a href="publicar.php" id="link2">Publicar</a>
               </div>
	</div>

	<div id="contenido">
		<center><font face="Dark Crystal" color="#fff" size="4"><h1 id="Categorías">Historias que me Gustan:</h1></font></center>
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