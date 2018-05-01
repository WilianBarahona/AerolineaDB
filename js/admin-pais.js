$(document).ready(function(){
	//Mostrar los empleados
	$("#btn-actualizar-pais").hide();
	mostrarTodos();
	
})



function mostrarTodos(){
	$.ajax({
		url:"../ajax/gestionar-paises.php",
		method:"POST",
		dataType: "JSON",
		data:{
			"accion":"mostrar-todos"
		},
		success: function(respuesta){
			for (var i = 0; i < respuesta.length; i++) {
				var paises = respuesta[i];
				var fila = 
				'<tr id="tbl-empleados-fila-' +paises.IDPAIS+'">'+
					  '<td>'+paises.NOMBREPAIS +'</td>'+
		              '<td>'+paises.NACIONALIDAD+'</td>'+
		              '<td>'+paises.CODIGOPOSTAL+'</td>'+
		              '<td>'+
		              '<button onclick="actualizarPais('+paises.IDEMPLEADO+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:green;" class="glyphicon glyphicon-refresh"></span>'+
		               '</button>'+
		               '&nbsp&nbsp<button onclick="eliminarPais('+paises.IDEMPLEADO+')" class="btn btn-default btn-xs">'+
		               		'<span style="color:red;" class="glyphicon glyphicon-trash"></span>'+
		               '</button>'+
					  '</td>'+
				'</tr>';

				$("#div-paises #tbl-paises tbody").append(fila);
			}
			$('#tbl-paises').DataTable();
		},
		error: function(e){
		},
    	columns: [
	        { data: 'Nombre Pais' },
	        { data: 'Nacionalida' },
	        { data: 'Codigo Postal' },
	        { data: 'Opciones' }
    	]
	});

	
}


function actualizarPais(idPais){

}
function eliminarPais(idPais){

}

function insertarPais(idPais){

}



						