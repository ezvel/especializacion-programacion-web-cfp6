<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$psw=$_POST['psw'];
$sql="SELECT * FROM usuarios where DNI='$usuario' AND contraseña='$psw'";
$consulta=mysqli_query($conexion,$sql);
//mysql_num_rows devuelve el nro de filas de una consulta hecha con select o show, o devuelve false en caso de error.. No sirve pa insert, delete, update y replace
//Sin embargo pa obtener el nro de filas modificadas en insert, delete, update y replace uso mysql_affected_rows()
$existe=mysqli_num_rows($consulta);
if($existe==1){
	header("location:acceso_garantizado.php");
}else{
	header("location:https://www.disney.com");
}
?>