<?php
include("conexion.php");
$apellido=$_POST['apellido'];
$sql="SELECT correo,nombre,apellido FROM alumnos WHERE apellido LIKE '%$apellido%'";
$consulta=mysqli_query($conexion,$sql);
echo"<table border=0 cellspacing=1 cellpadding=1>";
echo "<th>CORREO</th>";
echo "<th>NOMBRE</th>";
echo "<th>APELLIDO</th>";
while($registro=mysqli_fetch_row($consulta)){
	echo "<tr>";
	echo "<td>".$registro['0']."</td>";
	echo "<td>".$registro['1']."</td>";
	echo "<td>".$registro['2']."</td>";
	echo "</tr>";
}
echo "</table>";
$cuantos_registros=mysqli_num_rows($consulta);
echo "<br>";
echo "se encontraron: <b>".$cuantos_registros." </b> registro/s posible/s";
/*
.array vectores asociativos
array=por noombres
fetch=numeros
*/
?>