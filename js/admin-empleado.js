$(document).ready(function(){
	//Mostrar los empleados
	$("#btn-actualizar-empleado").hide();
	mostrarTodos();
	
})


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


						