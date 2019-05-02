<?php 
  
  session_start();
include "funcion.php";
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
}
ini_set ('error_reporting',0);

?>



<!DOCTYPE html>
<html>
<head>
	<title>Cool Fanfic</title>
	<link rel="stylesheet" type="text/css" href="style/csspub.css">
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
	<br><br><br><br>
	<div class="cont"><label>Titulo:</label>
	<input type="text" placeholder="Titulo" id="link3"> <br>
	<label>Descripcion:</label>
	<textarea></textarea>
    <div id="sub">
	    <input type="file" id="file1">
	    <p id="te">Archivo</p>
	</div>
	<input type="Submit" value="Publicar" id="cambiar">
	
	<div id="op">
   <img src="" height="100" width="200">
        <div id="por"><input type="file" id="port">
        <p id="ata">Portada</p>
        </div>
	    <select>
			<option value="">Anime/Manga</option>
			<option value="">Comics</option>
			<option value="">Peliculas</option>
			<option value="">Series</option>
			<option value="">Libros</option>
			<option value="">Celebridades</option>
			<option value="">Historias Propias</option>
			<option value="">Cartoon</option>
			<option value="">Cuentos</option>
		</select>		
	</div>
		</div>
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