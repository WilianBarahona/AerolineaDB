$(document).ready(function () {
    
    $("#btn-conexion").click(function () { 
    console.log("btn-conexion");  
        $.ajax({
                url:"ajax/gestion-login.php",
                method: "POST",
                data:{
                    "accion":"login",
                    "email":$("#inputEmail").val(),
                    "password":$("#inputPassword").val()
                },
                datatype:'JSON',
                success: function(respuesta){
                    console.log(respuesta)
                    var js=JSON.parse(respuesta);

                    if (js.status === 1) {
                        window.location = "admin/index.php";

                    } else if (js.status == 2){
                        window.location = "menuPrincipal.php";

                    } else {
                        
                        alert('El usuario no existe')
                    }
                },
                error: function(){

            }
        });

    });
});




