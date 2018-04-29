$(document).ready(function(){
	//Mostrar los pasajeros
	$("#btn-actualizar-pasajero").hide();
	mostrarTodos();
	
})


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

				$("#div-vuelos #tbl-vuelos tbody").append(fila);
			}
			$('#tbl-vuelos').DataTable();
		},
		error: function(e){
		},
    	columns: [
	        {data:'TipoVuelo'},
			{data:'FechaPartida'},
			{data:'FechaLlegada'},
			{data:'TiempoPromedio'},
			{data:'PesoMaximo(KG)'},
			{data:'Marca'},
			{data:'Modelo'},
			{data:'Opciones'}
    	]
	});
}


function actualizarVuelo(idVuelo){

}
function eliminarVuelo(idVuelo){

}

function insertarVuelo(idVuelo){

}

function seleccionarVuelo(idVuelo){

}


						




