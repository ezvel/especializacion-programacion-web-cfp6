<?php

include("mysql.php");

$db = new MySQL();

//$insertar = $db-> consulta("INSERT into datos values ('33','cc')");

$consulta = $db->consulta("SELECT * FROM");
$cuantas = $db-> getTotalConsultas();

if($db->num_rows($consulta)>0){
  while($resultados = $db->fetch_row($consulta)){ 
   echo "DNI: ".$resultados['0']."<br />"; 
   echo "NOMBRE: ".$resultados['1']."<br />"; 
   //echo $cuantas;
 }

 }else{
 echo " no hay datos para mostrar";
}

?>