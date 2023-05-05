wzwszaw<?php

//LEER SIMPLE

$fp = "archivo.txt";
$gestor = fopen($fp, "r"); //Que quiero abrir y en que modo --> modo lectura
fpassthru($gestor); //Mostrame todo hasta el final
fclose($gestor); //Cerrar



?>