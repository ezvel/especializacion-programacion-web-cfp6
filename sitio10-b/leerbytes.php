<?php

$archivo = "algo.txt"; //requiero este archivo para leerlo
$gestor = fopen($archivo, "r");
$contenido = fread($gestor, 100); //--> bytes
echo $contenido;
fclose($gestor);


?>