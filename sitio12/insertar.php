<?php

include("mysql.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];

$db = new MySQL();

$insertar = $db->consulta("INSERT into empleados (nombre, apellido, dni) values ('$nombre','$apellido','$dni')");


?>