

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="vJyjSR3GFueu";
			$bd="abc";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>