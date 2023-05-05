<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

<style>
	.pablo,
	input {
		font-family: 'Roboto', sans-serif
	};
</style>

<body class="pablo">
	<table border=1 cellspacing="1" cellpadding="1" align="center">
		<form action="loguearse.php" method="post">
			<tr>
				<td>USUARIO</td><td><input type="text" name="usuario" required></td>
			</tr>
			<tr>
				<td>PASSWORD</td><td><input type="password" name="psw" required></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login"></td><td><input type="reset" name="Borrar"></td>
			</tr>
		</form>
	</table>
</body>
</html>