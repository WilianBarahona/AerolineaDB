$(document).ready(function(){
	//Mostrar los empleados
	$("#btn-actualizar-empleado").hide();
	listarEstadoCivil();
	listarGenero();
	listarPais();
	listarCargo();
	mostrarTodos();
	
})

function listarEstadoCivil(){
	$.ajax({
		url:"../ajax/gestionar-empleados.php",
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
		url:"../ajax/gestionar-empleados.php",
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
		url:"../ajax/gestionar-empleados.php",
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

function listarCargo(){
	$.ajax({
		url:"../ajax/gestionar-empleados.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-cargos-empleados"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var cargo = respuesta[i];
				var fila ='<option value="'+cargo.IDESTADOCIVIL+'">'
							+cargo.NOMBREESTADOCIVIL+'</option>';

				$("#slc-cargo").append(fila);
			}
		},
		error: function(e){
		}
	});
}


function mostrarTodos(){
	$.ajax({
		url:"../ajax/gestionar-empleados.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"mostrar-todos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var empleados = respuesta[i];
				var fila = 
				'<tr id="tbl-empleados-fila-' +empleados.IDEMPLEADO+'">'+
					  '<td>'+empleados.PNOMBRE +'</td>'+
		              '<td>'+empleados.PAPELLIDO+'</td>'+
		              '<td>'+empleados.DIRECCION+'</td>'+
		              '<td>'+empleados.CORREO+'</td>'+
		              '<td>'+empleados.NOMBREGENERO+'</td>'+
		              '<td>'+empleados.NOMBREPAIS+'</td>'+
		              '<td>'+empleados.NOMBRECARGO+'</td>'+
		              '<td>'+
		              '<button onclick="actualizarEmpleado('+empleados.IDEMPLEADO+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:green;" class="glyphicon glyphicon-refresh"></span>'+
		               '</button>'+
		               '&nbsp&nbsp<button onclick="eliminarEmpleado('+empleados.IDEMPLEADO+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:red;" class="glyphicon glyphicon-trash"></span>'+
		               '</button>'+
					  '</td>'+
				'</tr>';

				$("#div-empleados #tbl-empleados tbody").append(fila);
			}
			$('#tbl-empleados').DataTable();
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
	        { data: 'Cargo'},
	        { data: 'Opciones'}
    	]
	});

	
}


function actualizarEmpleado(idEmpleado){

}
function eliminarEmpleado(idEmpleado){

}

function insertarEmpleado(idEmpleado){

}

function seleccionarEmpleado(idEmpleado){

}


						