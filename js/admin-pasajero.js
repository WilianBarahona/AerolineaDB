$(document).ready(function(){
	//Mostrar los pasajeros
	$("#btn-actualizar-pasajero").hide();
	listarEstadoCivil();
	listarGenero();
	listarPais();
	mostrarTodos();
	
})

function listarEstadoCivil(){
	$.ajax({
		url:"../ajax/gestionar-pasajeros.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-estados-civiles"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var estadoCivil = respuesta[i];
				var fila ='<option value="'+estadoCivil.IDESTADOCIVIL+'">'
							+estadoCivil.NOMBREESTADOCIVIL+'</option>';

				$("#slc-estado-civil").append(fila);
			}
		},
		error: function(e){
		}
	});
}

function listarGenero(){
	$.ajax({
		url:"../ajax/gestionar-pasajeros.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-generos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var genero = respuesta[i];
				var fila ='<option value="'+genero.IDGENERO+'">'
							+genero.NOMBREGENERO+'</option>';

				$("#slc-genero").append(fila);
			}
		},
		error: function(e){
		}
	});
}

function listarPais(){
	$.ajax({
		url:"../ajax/gestionar-pasajeros.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-paises"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var pais = respuesta[i];
				var fila ='<option value="'+pais.IDPAIS+'">'
							+pais.NOMBREPAIS+'</option>';

				$("#slc-pais").append(fila);
			}
		},
		error: function(e){
		}
	});

}

function mostrarTodos(){
	$.ajax({
		url:"../ajax/gestionar-pasajeros.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"mostrar-todos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var pasajeros = respuesta[i];
				var fila = 
				'<tr id="tbl-pasajeros-fila-' +pasajeros.IDPASAJERO+'">'+
					  '<td>'+pasajeros.PNOMBRE +'</td>'+
		              '<td>'+pasajeros.PAPELLIDO+'</td>'+
		              '<td>'+pasajeros.DIRECCION+'</td>'+
		              '<td>'+pasajeros.CORREO+'</td>'+
		              '<td>'+pasajeros.NOMBREGENERO+'</td>'+
		              '<td>'+pasajeros.NOMBREPAIS+'</td>'+
		              '<td>'+pasajeros.NUMEROPASAPORTE+'</td>'+
		              '<td>'+
		              '<button onclick="actualizarPasajero('+pasajeros.IDPASAJERO+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:green;" class="glyphicon glyphicon-refresh"></span>'+
		               '</button>'+
		               '&nbsp&nbsp<button onclick="eliminarPasajero('+pasajeros.IDPASAJERO+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:red;" class="glyphicon glyphicon-trash"></span>'+
		               '</button>'+
					  '</td>'+
				'</tr>';

				$("#div-pasajeros #tbl-pasajeros tbody").append(fila);
			}
			$('#tbl-pasajeros').DataTable();
		},
		error: function(e){
		},
    	columns: [
	        { data: 'Primer Nombre' },
	        { data: 'Primer Apellido' },
	        { data: 'Dirrecion' },
	        { data: 'Correo' },
	        { data: 'Genero' },
	        { data: 'Pais' },
	        { data: 'No. Pasaporte'},
	        { data: 'Opciones'}
    	]
	});
}


function actualizarPasajero(idPasajero){

}
function eliminarPasajero(idPasajero){

}

function insertarPasajero(idPasajero){

}

function seleccionarPasajero(idPasajero){

}


						