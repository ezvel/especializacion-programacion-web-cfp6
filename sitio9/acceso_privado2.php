<?php


session_start();

if (iset($_SESSION['nombre'])) {
	echo "Bienvenido <b><font color=red>" . $_COOKIE['USUARIO'] . "</font></b>";
	echo "<br>";
	echo "<a href='cerrar_sesion.php'>Cerrar</a>"
}else{
	header("location:inicio.php");
}


?>