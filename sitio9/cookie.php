<?php

$usuario = $_POST['usuario'];

setcookie("USUARIO", $usuario);//SE GENERA LA COOKIE
header("location:destino_final.php");

//NECESITO UN FORMULARIO



?>