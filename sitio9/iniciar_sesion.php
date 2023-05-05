6<?php

session_start();//INICIALIZA LA SESIÓN

$_SESSION['nombre']="valor"; //LE PONE NOMBRE A LA SESIÓNN

header("location:chequear.php"); //IR A CHEQUEAR A CHEQUEAR.PHP


?>