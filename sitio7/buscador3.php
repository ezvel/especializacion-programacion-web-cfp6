<html>
<body>
	<form action="buscando3.php" method="POST">
		Buscar por apellido
		<select name="apellido">
			<?php
			include("conexion.php");
			$sql="SELECT apellido from alumnos";
			$consulta=mysqli_query($conexion,$sql);
			while($registro=mysqli_fetch_row($consulta))
				echo "<option values=$registro[0]>$registro[0]</option>";
			?>
		</select>
		<input type="submit" value="buscar">
	</form>
</body>
</html>