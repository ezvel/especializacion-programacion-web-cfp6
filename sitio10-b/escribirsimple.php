<?php
$mensaje = $_POST['mensaje'];
$mensaje .= "<br>"; 
$mensaje .= "<hr>";
$mensaje .= "<br>";
$mensaje .= date("Y-m-d");
$mensaje .= "<br>";

$fp = fopen('data.html', 'a'); //Que quiero abrir y en que modo --> 
fwrite($fp, $mensaje);//el w escribe pero borra lo anterior


//a --> append --> anexar

//CONTINUAR UNA VARIABLE

  
fclose($fp);

header("location:data.html");


//$fp = fopen('data.html', "a"/*a*/); //Que quiero abrir y en que modo --> 
//fwrite($fp, $mensaje);//el w escribe pero borra lo anterior
//fclose($fp); //Cerrar
//header("location:data.html");

?>