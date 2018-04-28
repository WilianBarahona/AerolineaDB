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
				'<tr>'+
					  '<td>'+empleados.PNOMBRE +'</td>'+
		              '<td>'+empleados.PAPELLIDO+'</td>'+
		              '<td>'+empleados.DIRECCION+'</td>'+
		              '<td>'+empleados.CORREO+'</td>'+
		              '<td>'+empleados.NOMBREGENERO+'</td>'+
		              '<td>'+empleados.NOMBREPAIS+'</td>'+
		              '<td>'+empleados.NOMBRECARGO+'</td>'+
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
	        { data: 'Cargo'}
    	]
	});
}


						