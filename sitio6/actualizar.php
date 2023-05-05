<?php

include("conexion.php");

$dni = $_POST['dni'];
$correo = $_POST['correo'];

$sql = "UPDATE alumnos SET correo = '$correo' WHERE dni = '$dni'";

$consulta = mysqli_query($conexion, $sql);

if ($consulta) {
	header("location:ver_datos.php?mensaje=Alumno%20actualizados%20exitosamente");
}else{
	echo "Error al intentar eliminar al alumno";
}




?>