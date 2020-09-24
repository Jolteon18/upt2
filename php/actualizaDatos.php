<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['Clave_Emp'];
	$n=$_POST['Nombre'];
	$a=$_POST['ApPaterno'];
	$e=$_POST['ApMaterno'];
	$t=$_POST['FecNac'];
	$d=$_POST['Departamento'];
	$s=$_POST['Sueldo'];

	$sql="UPDATE empleados set Nombre='$n',
								ApPaterno='$a',
								ApMaterno='$e',
								FecNac='$t',
								Departamento='$d',
								Sueldo='$s'
				where Clave_Emp='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>