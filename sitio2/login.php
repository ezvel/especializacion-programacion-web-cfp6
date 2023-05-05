<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html>
	<body>
		<form action="logueado.php" method="post">
			USUARIO <input type="text" name="usuario">
			<br>
			CONTRASE&NtildeA <input type="password" name="psw">
			<br>
			<input type="submit" value="Enviar">
		</form>
		<font face="Arial" size="3"color="red">
		<?php
			echo $_GET['error']; //Tira un error porque la variable 
			                     //no tiene valor ya que todavia no
								//cargo el location al porque no se 
			                    //paso por el else
		?>
		</font>
	</body>
</html>