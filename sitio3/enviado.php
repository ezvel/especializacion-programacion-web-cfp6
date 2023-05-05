<style>

	.exito {
		background-color: #102050;
		color: white;
	}
	.mail {
		color:  red;
		font-weight: 700;
	}

</style>

<body class="exito">
<?php
//CREAR UNA VINCULACIÓN CON ENVIADO PHP
include("conexion.php"); 

$usuario = $_POST['usuario'];
$email = $_POST['email'];

$sql = "INSERT INTO datos (usuario, email) VALUES ('$usuario', '$email')";

$consulta = mysqli_query($conexion, $sql);

//VERIFICAR SI LA INSERSIÓN FUE EXITOSA
if ($consulta) {
	echo "Sus datos se insertaron correctamente en la base local <br>";
}else{
	echo "Error al cargar los datos";
}

echo "Su usuario es: " . $usuario;
echo "<br>";
echo "Su email es: " . "<span class='mail'>" . $email . "</span>";
?>
</body> 