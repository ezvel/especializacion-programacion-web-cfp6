<?php
error_reporting(0);
include("conexion.php");

//VER LOS DATOS
$sql = "SELECT * FROM alumnos";
$consulta = mysqli_query($conexion, $sql);

//echo $consulta; --> error
echo "<h1><center>DATOS OBTENIDOS</center></h1>";
echo "<table border=1 bordercolor=red align=center>"; //PERÍMETRO DE LA TABLA

//FUNCIÓN QUE TRANSFORMA EL REGISTRO (LA FILA) EN VECTOR 
/*
while ($registro = mysqli_fetch_row($consulta)) { //($registro == true);
	echo "<tr>";
	echo "<td>$registro[0]</td>";
	echo "<td>$registro[1]</td>";
	echo "<td>$registro[2]</td>";
	echo "<td>$registro[3]</td>";
	echo "</tr>";
}*/

while ($registro = mysqli_fetch_row($consulta)) { //($registro == true);
	echo "<tr>";
	foreach ($registro as $dato) {
		echo "<td>$dato</td>";
	}
	echo "</tr>";
}

/*
$registro[0] --> dni
$registro[1] --> nombre
$registro[2] --> apellido
$registro[3] --> correo
*/


echo "</table>";

echo "<br>";
echo "<center>" . $_GET['mensaje'] . "</center>";
echo "<br>";
echo "<center><a href='inscripcion.html'>Cargar nuevo alumno</a></center>";
echo "<br>";
echo "<center><a href='borrar_inscripcion.html'>Borrar nuevo alumno</a></center>";
echo "<br>";
echo "<center><a href='actualizar_inscripcion.html'>Actualizar datos nuevamente</a></center>";
echo "<br>";

?>