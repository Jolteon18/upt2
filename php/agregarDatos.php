<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$Nombre=$_POST['Nombre'];
	$ApPaterno=$_POST['ApPaterno'];
	$ApMaterno=$_POST['ApMaterno'];
	$FecNac=$_POST['FecNac'];
	$Departamento=$_POST['Departamento'];
	$Sueldo=$_POST['Sueldo'];

	$sql="INSERT into empleados (Nombre,ApPaterno,ApMaterno,FecNac,Departamento,Sueldo)
								values ('$Nombre','$ApPaterno','$ApMaterno','$FecNac','$Departamento','$Sueldo')";
	echo $result=mysqli_query($conexion,$sql);

 ?>