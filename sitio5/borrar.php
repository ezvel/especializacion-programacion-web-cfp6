<?php

include('conexion.php');

$dni = $_POST['dni'];

//CAMPO SQL Y CAMPO DE VARIABLE
$sql_borrar = "DELETE FROM division WHERE DNI = '$dni'";

if (mysqli_query($conexion, $sql_borrar)){
	echo "Datos borrados";
}else{
	echo "Error al eliminar"; //ERROR EN LA SENTENCIA SQL O EN LA CONEXIÓN A LA BASE DE DATOS
}

?>