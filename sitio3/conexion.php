<?php

$base = "prueba";
$conexion = mysqli_connect("localhost:3306","root","",$base);//Función para conectarse a una base de datos que se encuentra en xampp

//PROBAR SI LA CONEXIÓN FUE EXITOSA
if($conexion) {
	echo "la conexió fue exitosa";
}else{
	echo "error";
}

//CREAR UNA VINCULACIÓN CON ENVIADO PHP

?>