<?php

error_reporting(0);

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$pais = $_POST['pais'];
$PC = $_POST['PC'];
$noticias = $_POST['noticias'];
$date = $_POST['date'];
$fechanac = $_POST['fechanac'];
$comentario = $_POST['comentario'];
$archivo = $_POST['archivo'];

echo "Sus datos son...<br>";
echo "<hr>";
echo "<br>";
echo $usuario;
echo "<br>";
echo $password;
echo "<br>";
echo $pais;
echo "<br>";
echo $PC . " tiene pc";
if ($noticias == 1) {
	echo "Está suscripto a las noticias";
}else{
	echo "No está suscripto a las noticias";
}
echo "<br>";
echo $fechanac;
echo "<br>";
echo $comentario;

?>