<?php
if($objetoMysqli->connect_erno){
   die("Erro de conexion:".objetoMysqli->mysqli_connect_erno().",".$objetoMysqli->mysqli_connect_error());
}

else{
    echo "La conexion tuvo Exito";
}
?>