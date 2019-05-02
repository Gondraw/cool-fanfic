 
<?php
session_start();
require_once '../Model/usuarioModel.php';


$Op=$_REQUEST["Operacion"];
$modelUsuario = new usuarioModel();
switch($Op){
case "registroUsuario";

$value= array(
	'nombre' =>$_REQUEST["nombre"] ,
	'apellido' =>$_REQUEST["apellido"] ,
	'usuario' =>$_REQUEST["usuario"] ,
	'correo' =>$_REQUEST["correo"] ,
	'contrasena' =>$_REQUEST["contrasena"] ,
	'repetir' =>$_REQUEST["repetir"] 
	  );
 $lista = $modelUsuario->registroUsuario($value);
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($lista);
//ESTAS MA RAPIDO 


break;
case "iniciarSession":
$value= array(
	'usuario' =>$_REQUEST["usuario"] ,
	'contrasena' =>$_REQUEST["contrasena"]
	  );
 $lista = $modelUsuario->iniciarSesion($value);

 //echo "aqui ".$lista["usuario"];//aqui tengo ya el usuario ahora pasaselo a la avriable de $_SESION["usuarioMostrar"] hazlo  y dime como se haria?
 $_SESSION["usuarioMostrar"]=$lista["usuario"];
 //echo "el usuario ".$_SESSION["usuarioMostrar"];
        header('Content-type: application/json; charset=utf-8');
 		if($lista==null){
 			 echo json_encode(array("iniciocorrecto"=>"no"));
 		}else{
 			 echo json_encode(array("iniciocorrecto"=>"si"));
 		}

       // echo json_encode($lista);
break;

}

          /* $nombre = clean($_POST['nombre']);
            $apellido = clean($_POST['apellido']);
            $usuario = clean($_POST['usuario']);
            $correo = clean($_POST['correo']);
            $contrasena = md5($_POST['contrasena']);
            $repetir = md5($_POST['repetir']);*/


?>