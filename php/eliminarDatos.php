
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from empleados where Clave_Emp='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>