<?php

session_start();

if (isset($_SESSION['nombre'])) { //si esta configurada - existe la sesión
	echo "ACCESO GARANTIZADO";
	echo "<br>";
	echo "<a href='cerrar.php'>Cerrar sesion</a>";
	echo "<br>";
	echo session_id();
}else{
	echo "USTED NO PUEDE ACCEDER A ESTE CONTENIDO";
}




?>