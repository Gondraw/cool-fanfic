<?php 

require_once "../db/AccesoDB.php";


/**
 * 
 */
class usuarioDao
{
	
	public function registroUsuario($value){
		$contrasena=md5($value["contrasena"]);
		try {
			$sql="INSERT INTO data (id, nombre, apellido, usuario, correo, contrasena, repetir, avatar, portada) VALUES (NULL,'".$value["nombre"]."','".$value["apellido"]."','".$value["usuario"]."','".$value["correo"]."', '$contrasena', '".$value["repetir"]."', '', '')";
			//echo "el query es ".$sql;
			  $db= AccesoDB::getInstancia();
            $lista = $db->executeQueryUpdate($sql);
            
            return $lista;


		} catch (Exception $e) {
			
		}


	}
public function iniciarSesion($value){
	$USUARIO=$value["usuario"];
	$CONTRASENA=md5($value["contrasena"]);
//echo "lhh  ".$CONTRASENA;
		try {
			$sql="SELECT usuario FROM data WHERE  usuario='$USUARIO' and contrasena='$CONTRASENA'";

			//cuando te digo imprime a esta madre me refiero o de abajo vez no tieien nada de puto complicado 
			//esto te lo va imprimir en el network que es lo que voy hacer ahorita asi se desarroll en la vida dreal

			//echo "el query es ".$sql;
			 @ $db= AccesoDB::getInstancia();
            @$lista = $db->executeQuery($sql);
           // echo "query ".$sql;
            return @$lista[0];


		} catch (Exception $e) {
			
		}


	}


}


?>