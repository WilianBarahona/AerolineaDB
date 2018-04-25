






// $(document).ready(function(){
//   //cargarListaNoticias();
//   $("#btn-conexion").click(function(){
//       var parametros = "inputEmail=" +$("#inputEmail").val() + 
//             "&inputPassword="+$("#inputPassword").val();
//       //alert(parametros);
//       var username = $("#inputEmail").val(), password = $("#inputPassword").val();
//         if ((username === "") || (password === "")) {
//             $("#resultado").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>--Usuario o Contraseña no debe estar en blanco--</div>");
//         } else { 
//       $.ajax({
//         url:"ajax/acciones_login.php?accion=login",
//         method: "POST",
//         data: parametros,
//         dataType: 'json ',
//         success:function(respuesta){

//           if (respuesta.status==0){
//             $("#resultado").html(respuesta.mensaje);
//           }
//           else{
//             //alert("Si tiene acceso, sera redireccionado");
//             if(respuesta.Codigo_TipoUsuario==2)
//               window.location = "estructuraNoticias.php"; //Redireccionar a la pagina de cajero
//             else if(respuesta.Codigo_TipoUsuario==1)
//               window.location = "agregar-articulo.html";//Redireccionar a la pagina de administrador
//           }
//         },
//         error:function(){
//         }
//     });}
//   }); 
//   cargarListaNoticias();
// });

// $("#btn-guardar").click(function(){
//   var parametros= "inputText="+$("#inputText").val()+"&"+
//           "inputEmail="+$("#inputEmail").val()+"&"+
//           "inputPassword="+$("#inputPassword").val();
//   var username = $("#inputText").val(), correo = $("#inputEmail").val(), password = $("#inputPassword").val();
//         if ((username === "") || (correo === "") || (password === "")) {
//             $("#resultado").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>--Nombre y Apellido, Correo y Contraseña no debe estar en blanco--</div>");
//         } else {         
//   //alert(parametros);
//   $.ajax({
//     url:"ajax/gestion-usuarios.php?accion=guardar",
//     data:parametros,
//     method:"POST",
//     success:function(respuesta){
//       $("#exampleModal").modal("show");


//     },
//     error:function(err){
//       alert("Error: " + err);
//     }
//   });}
// });

// $("#btn-guardar-noticia").click(function(){
  
  

//   var n=document.getElementById('file-img').files[0].name;
//   //alert(categorias);
//   var categorias=$("input[type='radio'][name='rbt-codigo-usuario']:checked").val();
//   var parametros= "rbt-codigo-usuario="+$("input[type='radio'][name='rbt-codigo-usuario']:checked").val()+"&"+ 
//           "txt-titulo="+$("#txt-titulo").val()+"&"+
//           "txt-contenido="+$("#txt-contenido").val()+"&"+
//           "file-img="+n+"&"+
//           "date="+$("#date").val();


//   //alert(parametros);
//   $.ajax({
//     url:"ajax/gestion-usuarios.php?accion=guardar-noticia",
//     data:parametros,
//     method:"POST",
//     success:function(resultado){
//     //  $("#div-respuesta-noticias").html(resultado);
//      cargarListaNoticias();
//     },
//     error:function(err){
//       alert("Error: " + err);
//     }
//   });
// });
// function cargarListaNoticias(){
//   $.ajax({
//     url:"ajax/get-info.php?accion=obtener-noticias",
//     data:"",
//     method:"POST",
//     success:function(resultado){
//       $("#div-respuesta-noticias").html(resultado);
//     },
//     error:function(e){
//       alert("Eerror: " + e);
//     }
//   }); 
 
// }


