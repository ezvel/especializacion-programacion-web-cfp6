<?php

//ADJUNTAR ARCHIVOS AL SERVIDOR A UNA DETERMINADA CARPETA
$carpeta = "imagen";
copy($_FILES['file']['tmp_name'], $carpeta . "/" . $_FILES['file']['name']);

?>