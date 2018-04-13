<!DOCTYPE html>
<html>
<head>
      <title>Registro-AEROLINEAS SOSA</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="img/favicon.png">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-social.min.css">
      <link rel="stylesheet" type="text/css" href="css/login.css">
      <link rel="icon" href="imagenes/logo2.png" sizes="16x16" type="image/jpg">
</head>


<body class="contenedor login">
    <div id="particles-js"></div>
    
      <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 img-responsive">
                  
            </div>
            <div class="col-lg-5 col-md-4 col-sm-0 col-xs-0"></div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
              <button onclick="location='login.php'" class="btn btn-shadow coneccion" id="login_button">
            <span class="label">Iniciar sesión</span>
            
          </button>
            </div>
          </div>
    
          
          <!--Encabezado-->
            <div class="row parrafo-blanco">
             <div class="col-md-3"></div>
               <div class="col-md-6">
                    <p><strong><h1>REGISTRO DE USUARIO</h1></strong></p>
                    
                </div>
                <div class="col-md-3"></div>
           </div>
           <!--Formulario-->
           <div class="row">
               <form class="form-signin">
                    <button class="btn  btn-social btn-facebook style-buttons">Facebook 
                      <i class="fa fa-facebook"></i>
                    </button>
                    <button class="btn  btn-social btn-google style-buttons">Google+
                       <i class="fa fa-google-plus"></i>
                    </button>
                    <br>
                    <table>
                        
                         <tr>
                          <td colspan="2">
                              <em>
                                  <input type="text" style="padding: 15px 90px 15px 93px; text-align: center;" id="inputText" class="form-control" placeholder="Nombre y apellido" required autofocus>
                                </em>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="2">
                              <em>
                                <input type="email" style="padding: 15px 90px 15px 93px; text-align: center;" id="inputEmail" class="form-control" placeholder="CorreoElectronico" required autofocus>
                                </em>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <em>
                                   <input type="password" style="padding: 15px 90px 15px 93px; text-align: center;" id="inputPassword" class="form-control" placeholder="Contraseña" required autofocus>
                                </em>
                          </td>
                        </tr>
                       
                          
                    </table>
                     <br>
                     <br>
                    <input  id="btn-guardar"  class="btn btn-info btn-block"  style="font-size: 12px; position: relative;" value="Registrarse">
                         
                   <div class="col-md-12 col-lg-12">
                    <p class="navbar-text" style="font-size:15px;text-align:center; ">
                        <a href="terminos-condiciones.html" class="navbar-link">Al hacer clic en "Registrarse", aceptas las
                          <a href="terminos-condiciones.html">Condiciones generales de uso.</a></a>
                    
                </p>
            </div>       
       
                  </form>
        </div>
      <span id="resultado" style="text-align: center;"></span>
      <br>
      <br>
      
      <!--Enlaces-->
      
        <div class="row barra" >
          <div class="col-md-2 col-lg-3"></div>
        <div class="col-md-12 col-lg-9">
            <p class="navbar-text" style="font-size:15px ;">
                    <a href="LandingPage/index.html" class="navbar-link">Acerca de Nosotros</a>
                    <a href="Explorador.html" class="navbar-link">Explorador</a
                    <a href="devices.html" class="navbar-link">App Movil</a>
                    <a href="#" class="navbar-link">Ayuda y contactos</a>
                    
                </p>
            </div>
            <div class="col-md-2 col-lg-2"></div>
        </div>


<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title">--BIENVENIDO A FLIPBOARD--</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><p><h5 >Usuario Registrado exitosamente, por favor INCIE SESION</p></h5></center>
      </div>
      <div class="modal-footer">
        <button onclick="location='login.php'" type="button" class="btn btn-primary">Aceptar</button>
        
      </div>
    </div>
  </div>
</div>

       
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/controlador.js"></script>
</body>
</html>