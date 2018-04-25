<!DOCTYPE html>
<html>
<head>
      <title>Login</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap-social.min.css">
      <link rel="stylesheet" type="text/css" href="css/login.css">
      <link rel="icon" href="imagenes/logo2.png" sizes="16x16" type="image/jpg">
</head>


<body class="contenedor login">
    <div id="particles-js"></div>
    <header>
      <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 img-responsive">
                  
            </div>
            <div class="col-lg-5 col-md-4 col-sm-0 col-xs-0"></div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
                <button onclick="location='registro.php'" class="btn btn-shadow coneccion" id="login_button">
                    
                      <span class="label">Registrarte</span>
                </button>
            </div>
          </div>
    </header>
          
          <!--Encabezado-->
            <div class="row parrafo-blanco">
             <div class="col-md-3"></div>
               <div class="col-md-6">
                    <p><strong><h1>INICIAR SESION EN AEROLINEA SOSA</h1></strong></p>
                    
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
                    <br>
                    <table>
                        <tr>
                          <td>
                              <em>
                                    <input type="email" style="padding: 15px 90px 15px 93px; text-align: center;" t id="inputEmail" class="form-control" placeholder="Correo Electronico" required autofocus>
                                </em>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <em>
                                   <input type="password" style="padding: 15px 90px 15px 93px;text-align: center;" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                                </em>
                          </td>
                        </tr>
                        
                    </table>
                    <br>
                    <button id="btn-conexion" class="btn btn-info btn-block" type="button" style="font-size: 12px; position: relative;">
                      
                         Iniciar Sesion
                    </button>
                    <br>
                    <div class="col-md-12 col-lg-12">
                    <p class="navbar-text" style="font-size:15px;text-align:center; ">
                        <a href="#" class="navbar-link" style="text-decoration:none">¿Olvidaste tu nombre de usuario o contraseña?</a>
                    
                </p>
            </div>       
                  </form>
        </div>
         <span id="resultado" style="text-align: center;"></span>
      <br>
      <br>
      <br>
      <!--Enlaces-->
      
        <div class="row barra" >
          <div class="col-md-2 col-lg-3"></div>
        <div class="col-md-12 col-lg-9">
            <p class="navbar-text" style="font-size:15px ;">
                    <a href="LandingPage/index.html" class="navbar-link">Acerca de Nosotros</a>
                    <a href="explorador.html" class="navbar-link">Explorador</a>                   
                    <a href="devices.html" class="navbar-link">App Movil</a>
                    <a href="#" class="navbar-link">Ayuda y contactos</a>
                    
                </p>
            </div>
            <div class="col-md-2 col-lg-2"></div>
        </div>

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/controlador.js"></script>
        
</body>
</html>