$(function() { 
		
	$("#btn-guardar-noticia").click(function(){  
		$(".error").fadeOut().remove();
		
        if ($("#txt-titulo").val() == "") {  
			$("#txt-titulo").focus().after('<span class="error">Ingrese su nombre</span>');  
			return false;  
		}  
        if ($("#txt-contenido").val() == "") {
			$("#txt-contenido").focus().after('<span class="error">Ingrese un email correcto</span>');  
			return false;  
		}  
        if ($("#date").val() == "") {  
			$("#date").focus().after('<span class="error">Ingrese un asunto</span>');  
			return false;  
		}  
    });  
	$("#txt-titulo, #txt-contenido, .#date").bind('blur keyup', function(){  
        if ($(this).val() != "") {  			
			$('.error').fadeOut();
			return false;  
		}  
	});	
});