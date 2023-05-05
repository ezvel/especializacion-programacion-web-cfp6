<?php

session_start();
$_SESSION['nombre']="x";
$_COOKIE['USUARIO'];
header("location:acceso_privado2.php");

?>