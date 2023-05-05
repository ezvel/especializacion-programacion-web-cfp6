<?php
$usuario=$_POST['usuario'];
$psw=$_POST['psw'];

//FUNCIÓN MD5
/*
if ($usuario=="Pablo" || $psw="1234") {
	echo "Bienvenido administrador";
	echo "<br>";
	echo "su contraseña encriptada es: " . md5($psw);
}
else {
	echo "debe loguearse correctamente";
}
*/

//FUNCIÓN EMPTY
/*

if (empty($usuario) || empty($psw)) {
	echo "Faltan datos";
}
else {
	echo "Ud se logueo con datos";
}
*/

/*
//FUNCIÓN EMPTY CON ! (NEGACIÓN)
if (!empty($usuario) && !empty($psw)) {
	echo "Ud se logueo con datos";
}
else {
	echo "Faltan datos";
}
*/


//IF - ELSE IF - ELSE
/*
if ($usuario == "Pablo" && $psw=="1234") {
	echo "Usted se logueo como " . $usuario;
} else if ($usuario == "Maria" && $psw=="2345") {
	echo "Usted se logueo como " . $usuario;
}else{
	header("location:http://disney.com");//puedo redireccionarlo a la página de logueo
}*/

//IF - ELSE IF - ELSE
if ($usuario == "Pablo" && $psw=="1234") {
	echo "Usted se logueo como " . $usuario;
} else if ($usuario == "Maria" && $psw=="2345") {
	echo "Usted se logueo como " . $usuario;
}else{
	$error="Verifique sus datos";
	header("location:login.php?error=$error");
}

?>