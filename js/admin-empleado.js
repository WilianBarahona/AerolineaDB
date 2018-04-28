$(document).ready(function(){
	//Mostrar los empleados
	mostrarTodos()
})


function mostrarTodos(){
	$.ajax({
		url:"../ajax/gestionar-empleados.php",
		method:"POST",
		// dataType: "JSON",
		data:{
			"accion":"mostrar-todos"
		},
		success: function(respuesta){
			$("#div-empleados").html(respuesta)
			// for (var i = 0; i < respuesta.length; i++) {
			// 	var empleados = respuesta[i];
			// 	var fila = 
			// 	'<tr id="tbl-empleados-fila-'+empleados.id_album+'">'+
			// 	'	<td><img class="img img-circle img-responsive" src="../'+empleados.album_cover_url+'" title="'+empleados.nombre_album+'"></td>'+
			// 	'	<td>'+empleados.nombre_album +'</td>'+
			// 	'	<td>'+empleados.nombre_artista+'</td>'+
			// 	'	<td>'+empleados.anio + '</td>'+
			// 	'  	<td><button onclick="editarAlbum('+empleados.id_album+')" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>'+
			// 	'  	<button onclick="eliminarAlbum('+empleados.id_album+')" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash"></span></button></td>'+
			// 	'	</tr>';
			// 	$("#div-empleados #tbl-empleados tbody").append(fila);
			// }
		},
		error: function(e)
		{

		}
	});
}
