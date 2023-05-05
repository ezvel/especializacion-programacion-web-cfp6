<?php

include("conexion.php");

$dni = $_POST['dni'];

$sql = "DELETE FROM alumnos WHERE dni = '$dni'";

$consulta = mysqli_query($conexion, $sql);

if ($consulta) {
	header("location:ver_datos.php?mensaje=Alumno%20eliminado%20exitosamente");
}else{
	echo "Error al intentar eliminar al alumno";
}




?>