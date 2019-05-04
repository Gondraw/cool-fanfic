<?php 
 
  session_start();
  
include "funcion.php";
if (isset($_SESSION['usuario'])) {
    header("Location: Login.php");
}
ini_set ('error_reporting',0);
 require_once "db/AccesoDB.php";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Cool Fanfic</title>
	<link rel="stylesheet" type="text/css" href="style/cssedit.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="icon" type="image/png" href="style/favico.png">
	<link rel="stylesheet" type="text/css" href="style1/style1.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

		 <script type="text/javascript">
	 	$(function(){
			$("#editarDatos").click(function(){

					console.log($("#file1")[0]);
					 $.ajax({url: "Controller/usuariosController.php?Operacion=actualizarDatos",
					 data: {
			            "usuario": $("#usuariodato").val(),
			            "contrasena": $("#password").val()
			           
			          },

					  success: function(result){
					  	//po rque se te complica tanto me desespera eso
					  	if(result["0"]["cambioExitoso"]){
					  		alert("sus datos cambiaron ");
					  	}else{
					  		alert("sus datos no cambiaron");
					  	}
					  	//alert("inicio  se sesion exitoso");

    					console.log("entro aqui ",result);
  				     }});
				});
	 //es que yo subo imagenes pero esta mas complejo dejaver de tu forma como hacerlo
		/*	$("#uploadImage").on("submit",(function(e){
					e.preventDefault();
console.log($("#uploadImage").serialize());
						 $.ajax({url: "Controller/usuariosController.php?Operacion=subirFotoAvatar",
						 	type: "POST", 
					 data:new FormData(this) ,
					 contentType: false,  
					 processData:false,
					  cache: false,
					  success: function(result){
					  $("#message").html(result);
					  
  				     }});
					
			}));
*/
			})	

	 </script>
</head>
<body>

	<?php
 $carpetaDestino="Avatar/";
 
    # si hay algun archivo que subir
    if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0])
    {
 
        # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
 
            # si es un formato de imagen
            if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png")
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
		              $sql="UPDATE data tbdata SET tbdata.avatar='".$destino."' WHERE tbdata.usuario='".$_SESSION["usuarioMostrar"]."'";
						//echo "el query es ".$sql;
						@  $db= AccesoDB::getInstancia();
			           @ $db->executeQueryUpdate($sql);
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";


                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
                }
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es imagen jpg, png o gif";
            }
        }
    }else{
        echo "<br>No se ha subido ninguna imagen";
    }

	?>
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
<form id="uploadImage" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
	<div id="contenido">
	        <center><h2 id=title>Edital perfil:</h2></center>

		<div id="portada">            

		<img src=""<?php echo $row["avatar"];?> height="270" width="1349">
            <input type="file" id="file1">
            <div id="file2"><p id="porta">Portada</p></div>
		</div>
		<div id="avatar">
           <br><br><br>
            <center><img src="Avatar\Kakashi.png" width="100" height="100"></center>
            <br><br><br><br>
         <input type="file" name="archivo[]" id="file1" multiple="multiple">
            <div id="file2"><p id="porta">Avatar</p></div>
            <div id="usuario"><?php echo $_SESSION["usuarioMostrar"] ?></div>

            <br><br>
            <hr>
		</div>
		<div id="message"></div>
            <input type="submit" value="Subir Imagen" id="subirImagen">
            	<center><div id="conte">
           <P id="edit">Nueva contraseña:</P>
           <input type="password" id="password" placeholder="Contraseña">
           <p id="edit2">Nuevo Usuario</p>
             <input type="text" id="usuariodato" placeholder="Usuario">
           <br>
           <input type="submit" value="Editar" id="editarDatos">
            </div></center>
	</div></form>
			
	<div id="pie">
		 <a href="Preguntas Frecuentes.php" id="link">Preguntas Frecuentes</a>
		  <a href="" id="link">Comunidad</a>
        <a href="Sobre Nosotros.php" id="link">Sobre Nosotros</a>
        <a href="Contactenos.php" id="link">Contactenos</a>
        <a href="" id="link">Sitios Web</a>
		<hr color="#C10000" size="4"><style type="text/css">hr {border: 0; height: 0; box-shadow: 0 2px 6px 5px #C10000; margin-top:10px; } </style>
			<footer>
				<p>Cool Fanfic- Todos los derechos reservados 2019©</p>
			</footer>
			
		</div>
</body>
</html>