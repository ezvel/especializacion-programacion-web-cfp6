<?php

echo "<body bgcolor=#005050 color=#ffffff></body>"

?>

<font face="Arial">

<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];


echo "Tus datos son: <b>" . $nombre . " " . $apellido . "</b>";

echo "<br>"; //break

//CONDICIONALES

if($nombre == "Ezequiel") {
	echo "<font face='helvetica'>Bienvenido ADMINISTRADOR</font>";
}else{
	echo "Bienvenido Invitado";
	echo "<br>";
	echo "<img src='img/auto.webp' width='500px'>";
}

//Comentario de bloque

/*

l&aacute;mpara;
&ntilde;
&nbsp;

*/

?>
</font>

<!--imagen--><!--referenciacion -->








