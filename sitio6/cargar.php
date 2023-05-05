<?php

//UTILIZO EL ARCHIVO CONEXIÓN PARA PODER ACCEDER A LA BASE DE DATOS
//SOLO NECESITARÉ CARGAR LOS DATOS A LA BASE DE DATOS
include("conexion.php");

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

$sql = "INSERT INTO alumnos (dni, nombre, apellido, correo) VALUES ('$dni', '$nombre', '$apellido', '$correo')";

$consulta = mysqli_query($conexion, $sql);

if ($consulta) {
	header("location:ver_datos.php?mensaje=datos%20insertados%20correctamente");
	//echo "Datos cargado exitosamente";
}else{
	echo "Error al cargar los datos";
}

?>