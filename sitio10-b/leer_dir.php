<?php

$carpeta = opendir("imagen");

//TODOS LOS ARCHIVOS DE LA CARPETA
while (($file_name = readdir($carpeta)) !== false) {
	if ($file_name != "." && $file_name != "..") {
		echo ("Nombre de archivo: <a href='imagen/" . $file_name . "'>" . $file_name . "</a>");
		echo "<img src=imagen/" . $file_name . " width='24px' height='24px'>";
		//<img src='imagen/dibujo.jpg' width='24px' height='24px'>
		echo "<br>";
	}
}

//QUIERO HACER 
closedir($carpeta);

?>