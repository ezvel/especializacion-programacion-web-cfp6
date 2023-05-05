<?php

include('conexion.php');

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$evento = $_POST['evento'];
$descripcion = $_POST['descripcion'];
$operador = $_POST['operador'];

$sql = "INSERT INTO eventos VALUES ('', '$dni', '$nombre', '$apellido', '$evento', '$descripcion', '$operador')";

$consulta = mysqli_query($conexion, $sql);

if ($consulta) {
	echo "Se generó el evento";
}else{
	echo "error";
}
















?>