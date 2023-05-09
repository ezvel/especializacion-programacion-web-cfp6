<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$psw=$_POST['psw'];
$sql="SELECT * FROM usuarios WHERE dni='$usuario' AND psw='$psw'";
$consulta=mysqli_query($conexion,$sql);
$existe=mysqli_num_rows($consulta);  //1
if($existe==1){
	header("location:acceso_garantizado.php");
}else{
	header("location:http://www.disney.com");
}
?>

