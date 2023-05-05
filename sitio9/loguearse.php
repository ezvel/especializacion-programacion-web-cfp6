<?php

include("conexion.php");

$usuario = $_POST['usuario'];
$psw = $_POST['psw'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and psw = '$psw'";

$consulta = mysqli_query($conexion, $sql);

$existe = mysqli_num_rows($consulta); //DEVUELVE 1 SI EL USUARIO ES VÁLIDO SINO 0. 1 PORQUE ES CAMPO UNICO EN LA CONSULTA

if ($existe == 1) {
	setcookie("USUARIO", $usuario);
	header("location:acceso_privado.php");
}else{
	header("location:inicio.php");
}

?>