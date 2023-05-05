<?php

include('conexion.php');

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];

//CAMPO SQL Y CAMPO DE VARIABLE //QUE QUIERO CAMBIAR Y DONDE QUIERO CAMBIARLO
$sql_actualizar = "UPDATE division SET nombre = '$nombre' WHERE dni = '$dni'";

if (mysqli_query($conexion, $sql_actualizar)){
	echo "Datos actualizados";
}else{
	echo "Error al modificar"; //ERROR EN LA SENTENCIA SQL O EN LA CONEXIÓN A LA BASE DE DATOS
}

?>