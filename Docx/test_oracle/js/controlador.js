$( "#btn-select" ).click(function() {
  	$.ajax({
		url:"ajax/test-conexion.php",
		data:{
			"accion":"click"
		},
		method:"POST",
		success:function(respuesta){
			$("#div-respuesta").html(respuesta);
		},
		error:function(e){
			alert("Error: "+e);
		}
	});
});





