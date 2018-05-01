$(document).ready(function(){
	//Mostrar los pasajeros
	$("#btn-actualizar-vuelo").hide();
	listarAvion();
	listarTipoVuelo();
	listarRuta();
	mostrarTodos();
	
})


function mostrarTodos(){
	$.ajax({
		url:"../ajax/gestionar-vuelos.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"mostrar-todos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var vuelos = respuesta[i];
				console.log("ruta")
				var fila = 
				'<tr id="tbl-vuelos-fila-' +vuelos.IDVUELO+'">'+
					  '<td>'+vuelos.NOMBRETIPOVUELO+'</td>'+
					  '<td>'+vuelos.ALIASRUTA+'</td>'+
					  '<td>'+vuelos.REGISTRO+'</td>'+
					  '<td>'+vuelos.NOMBREMARCA+'</td>'+
					  '<td>'+vuelos.NOMBREMODELO+'</td>'+
					  '<td>'+vuelos.FECHAHORAPARTIDA +'</td>'+
		              '<td>'+vuelos.FECHAHORALLEGADA+'</td>'+
		              '<td>'+
		              '<button onclick="actualizarVuelo('+vuelos.IDPASAJERO+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:green;" class="glyphicon glyphicon-refresh"></span>'+
		               '</button>'+
		               '&nbsp&nbsp<button onclick="eliminarVuelo('+vuelos.IDPASAJERO+')" class="btn btn-default btn-xs">'+
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
	        {data:'Ruta'},
	        {data:'RegistroAvion'},
	        {data:'Marca'},
	        {data:'Modelo'},
			{data:'FechaPartida'},
			{data:'FechaLlegada'},
			{data:'Opciones'}
    	]
	});
}

function listarAvion(){
	$.ajax({
		url:"../ajax/gestionar-vuelos.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-aviones"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var genero = respuesta[i];
				var fila ='<option value="'+genero.IDAVION+'">'
							+genero.REGISTRO+'</option>';

				$("#slc-avion").append(fila);
			}
		},
		error: function(e){
		}
	});

}

function listarTipoVuelo(){
	$.ajax({
		url:"../ajax/gestionar-vuelos.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-tipos-vuelos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var genero = respuesta[i];
				var fila ='<option value="'+genero.IDTIPOVUELO+'">'
							+genero.NOMBRETIPOVUELO+'</option>';

				$("#slc-tipo-vuelo").append(fila);
			}
		},
		error: function(e){
		}
	});

}

function listarRuta(){
	$.ajax({
		url:"../ajax/gestionar-vuelos.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"listar-rutas"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var genero = respuesta[i];
				var fila ='<option value="'+genero.IDRUTA+'">'
							+genero.ALIASRUTA+'</option>';

				$("#slc-ruta").append(fila);
			}
		},
		error: function(e){
		}
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


						




