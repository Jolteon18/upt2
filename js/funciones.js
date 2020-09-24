

function agregardatos(Nombre, ApPaterno, ApMaterno, FecNac, Departamento, Sueldo) {

	cadena = "Nombre=" + Nombre +
		"&ApPaterno=" + ApPaterno +
		"&ApMaterno=" + ApMaterno +
		"&FecNac=" + FecNac +
		"&Departamento=" + Departamento +
		"&Sueldo=" + Sueldo;

	$.ajax({
		type: "POST",
		url: "php/agregarDatos.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tabla.php');
				alertify.success("agregado con exito :)");
			} else {
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos) {

	d = datos.split('||');

	$('#idpersona').val(d[0]);
	$('#Nombreu').val(d[1]);
	$('#ApPaternou').val(d[2]);
	$('#ApMaternou').val(d[3]);
	$('#FecNacu').val(d[4]);
	$('#Departamentou').val(d[5]);
	$('#Sueldou').val(d[6]);

}

function actualizaDatos() {


	Clave_Emp = $('#idpersona').val();
	Nombre = $('#Nombreu').val();
	ApPaterno = $('#ApPaternou').val();
	ApMaterno = $('#ApMaternou').val();
	FecNac = $('#FecNacu').val();
	Departamento = $('#Departamentou').val();
	Sueldo = $('#Sueldou').val();

	cadena = "Clave_Emp=" + Clave_Emp +
		"&Nombre=" + Nombre +
		"&ApPaterno=" + ApPaterno +
		"&ApMaterno=" + ApMaterno +
		"&FecNac=" + FecNac +
		"&Departamento=" + Departamento +
		"&Sueldo=" + Sueldo;

	$.ajax({
		type: "POST",
		url: "php/actualizaDatos.php",
		data: cadena,
		success: function (r) {

			if (r == 1) {
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			} else {
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id) {
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
		function () { eliminarDatos(id) }
		, function () { alertify.error('Se cancelo') });
}

function eliminarDatos(id) {

	cadena = "id=" + id;

	$.ajax({
		type: "POST",
		url: "php/eliminarDatos.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Eliminado con exito!");
			} else {
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}