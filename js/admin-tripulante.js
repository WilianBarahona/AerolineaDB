 $(document).ready(function(){
	//Mostrar los empleados
	//$("#div-select-tripulante").css("display","none");
	ocultarTablaDatosEmpleado();
	mostrarTblDatosTripulantes();
	mostrarTodos();
	
})


function mostrarTodos(){
	$.ajax({
		url:"../ajax/gestionar-tripulantes.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"mostrar-todos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var empleados = respuesta[i];
				var fila = 
				'<tr id="tbl-tripulantes-fila-' +empleados.IDTRIPULANTE+'">'+
					  '<td>'+empleados.PNOMBRE +'</td>'+
		              '<td>'+empleados.PAPELLIDO+'</td>'+
		              '<td>'+empleados.DIRECCION+'</td>'+
		              '<td>'+empleados.CORREO+'</td>'+
		              '<td>'+empleados.NOMBREGENERO+'</td>'+
		              '<td>'+empleados.NOMBREPAIS+'</td>'+
		              '<td>'+empleados.NOMBRECARGO+'</td>'+
		              '<td>'+
		              '<button onclick="actualizarTripulante('+empleados.IDTRIPULANTE+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:green;" class="glyphicon glyphicon-refresh"></span>'+
		               '</button>'+
		               '&nbsp&nbsp<button onclick="eliminarTripulante('+empleados.IDTRIPULANTE+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:red;" class="glyphicon glyphicon-trash"></span>'+
		               '</button>'+
					  '</td>'+
				'</tr>';

				$("#div-tripulantes #tbl-tripulantes tbody").append(fila);

			}
			$('#tbl-tripulantes').DataTable();
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


function mostrarTblDatosTripulantes(){
	$.ajax({
		url:"../ajax/gestionar-tripulantes.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"mostrar-todos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var empleados = respuesta[i];
				var fila = 
				'<tr id="tbl-tripulantes-select-fila-' +empleados.IDEMPLEADO+'">'+
					  '<td>'+empleados.PNOMBRE +'</td>'+
		              '<td>'+empleados.PAPELLIDO+'</td>'+
		              '<td>'+empleados.DIRECCION+'</td>'+
		              '<td>'+empleados.CORREO+'</td>'+
		              '<td>'+empleados.NOMBREGENERO+'</td>'+
		              '<td>'+empleados.NOMBREPAIS+'</td>'+
		              '<td>'+empleados.NOMBRECARGO+'</td>'+
		              '<td>'+
		              '&nbsp&nbsp<button onclick="seleccionarTripulante('+empleados.IDTRIPULANTE+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:green;" class="glyphicon glyphicon-ok"></span>'+
		              '</button>'+
					  '</td>'+
				'</tr>';
				$("#div-select-tripulante #tbl-select-tripulante tbody").append(fila);

			}
			$('#tbl-select-tripulante').DataTable();
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
	        { data: 'Seleccionar'}
    	]
	});
}
function ocultarTablaDatosEmpleado(){
	$("#btn-actualizar-tripulante").hide();
	$("#tbl-datos-tripulantes").find("#tr-primer-nombre").hide();
	$("#tbl-datos-tripulantes").find("#tr-primer-nombre").hide();
	$("#tbl-datos-tripulantes").find("#tr-segundo-nombre").hide();
	$("#tbl-datos-tripulantes").find("#tr-primer-apellido").hide();
	$("#tbl-datos-tripulantes").find("#tr-segundo-apellido").hide();
	$("#tbl-datos-tripulantes").find("#tr-direccion").hide();
	$("#tbl-datos-tripulantes").find("#tr-correo").hide();
	$("#tbl-datos-tripulantes").find("#tr-fecha-nacimiento").hide();
	$("#tbl-datos-tripulantes").find("#tr-estado-civil").hide();
	$("#tbl-datos-tripulantes").find("#tr-genero").hide();
	$("#tbl-datos-tripulantes").find("#tr-pais").hide();
}


function mostrarTablaDatosEmpleado(){
	$("#btn-actualizar-tripulante").hide();
	$("#tbl-datos-tripulantes").find("#tr-primer-nombre").show();
	$("#tbl-datos-tripulantes").find("#tr-primer-nombre").show();
	$("#tbl-datos-tripulantes").find("#tr-segundo-nombre").show();
	$("#tbl-datos-tripulantes").find("#tr-primer-apellido").show();
	$("#tbl-datos-tripulantes").find("#tr-segundo-apellido").show();
	$("#tbl-datos-tripulantes").find("#tr-direccion").show();
	$("#tbl-datos-tripulantes").find("#tr-correo").show();
	$("#tbl-datos-tripulantes").find("#tr-fecha-nacimiento").show();
	$("#tbl-datos-tripulantes").find("#tr-estado-civil").show();
	$("#tbl-datos-tripulantes").find("#tr-genero").show();
	$("#tbl-datos-tripulantes").find("#tr-pais").show();
}

function actualizarTripulante(idTripulante){

}
function eliminarTripulante(idTripulante){

}

function insertarTripulante(idTripulante){

}

function seleccionarTripulante(idTripulante){

}