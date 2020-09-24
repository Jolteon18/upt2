<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>
<body>

	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre</label>
        	<input type="text" name="" id="Nombre" class="form-control input-sm">
        	<label>Apellido Paterno</label>
        	<input type="text" name="" id="ApPaterno" class="form-control input-sm">
        	<label>Apellido Materno</label>
        	<input type="text" name="" id="ApMaterno" class="form-control input-sm">
        	<label>Fecha de nacimiento</label>
        	<input type="date" name="" id="FecNac" class="form-control input-sm">
          <label>Departamento</label>

                            <select name="Departamento" id="Departamento">
                                
                               
                                <option value="1" name="Departamento">Sistemas</option>
                                <option value="2" name="Departamento">Comercial</option>
                              
                               

                            </select>
                            <br>
           <label>Sueldo</label>
        	<input type="text" name="" id="Sueldo" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="Nombreu" class="form-control input-sm">
        	<label>Apellido Paterno</label>
        	<input type="text" name="" id="ApPaternou" class="form-control input-sm">
        	<label>Apellido Materno</label>
        	<input type="text" name="" id="ApMaternou" class="form-control input-sm">
        	<label>Fecha de nacimiento</label>
        	<input type="date" name="" id="FecNacu" class="form-control input-sm">
          <label>Departamento</label>

                            <select name="Departamentou" id="Departamentou">
                                
                               
                                <option value="1" name="Departamentou">Sistemas</option>
                                <option value="2" name="Departamentou">Comercial</option>
                              
                               

                            </select>
                            <br>
                             <label>Sueldo</label>
        	<input type="text" name="" id="Sueldou" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          Nombre=$('#Nombre').val();
          ApPaterno=$('#ApPaterno').val();
          ApMaterno=$('#ApMaterno').val();
          FecNac=$('#FecNac').val();
          Departamento=$('#Departamento').val();
          Sueldo=$('#Sueldo').val();
            agregardatos(Nombre,ApPaterno,ApMaterno,FecNac,Departamento,Sueldo);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>