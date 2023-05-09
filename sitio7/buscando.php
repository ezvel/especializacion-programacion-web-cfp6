<?php
include("conexion.php");
$dni=$_POST['dni'];
$sql="SELECT correo,nombre,apellido FROM alumnos WHERE dni='$dni'";
$consulta=mysqli_query($conexion,$sql);
while($registro=mysqli_fetch_row($consulta)){
	
	echo $registro['0'];
	echo "<br>";
	echo $registro['1'];
	echo "<br>";
	echo $registro['2'];
}
$cuantos_registros=mysqli_num_rows($consulta);
echo "<br>";
echo "se encontraron: <b>".$cuantos_registros." </b> registro/s posible/s";
/*
.array vectores asociativos
array=por noombres
fetch=numeros
*/
?>