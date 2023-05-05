<?php

$base = "escuela";

$conexion = mysqli_connect("localhost", "root","",$base);

if ($conexion) {
	echo "Conexion exitosa";
}



?>