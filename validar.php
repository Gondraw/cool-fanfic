<?php 
if(isset($_POST['submit'])) {
	if(empty($nombre)) {
		echo "<p class='error'>X No has puesto tu nombre </p>";
	}

}

	if(empty($apellido)) {
		echo "<p class='error'>X No has puesto tu apellido</p>";
	}


	if(empty($usuario)) {
		echo "<p class='error'>X No has puesto tu usuario </p>";
	}


	if(empty($gmail)) {
		echo "<p class='error'>X No has puesto tu correo </p>";
	}

	if(empty($passsword)) {
		echo "<p class='error'>X No has puesto tu contraseña </p>";
	}


	if(empty($repetir)) {
		echo "<p class='error'>X No has repetido tu contraseña </p>";
	}

