<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title> Home | UTBTIC </title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body >
    
    <div class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">UTBTIC</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.html" >INICIO</a></li>
                     <li><a href="services.html">NOSOTROS</a></li>
                    <li><a href="portfolio.html">CURSOS</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                     
                     <li><a href="" class="scroll btn btn-success" data-toggle="modal" data-target="#login" style="font-weight:600;margin-right:12px;">INGRESAR CON MI CUENTA</a></li>
                     <li><a href="" class="scroll btn btn-warning" data-toggle="modal" data-target="#myModal" style="font-weight:600;">REGISTRARME</a></li>
                </ul>
            </div>
           
        </div>
    </div>
   <!--/.NAVBAR END-->


   <!-- MODALS LONGIN AND REGISTER -->
    <!-- Modal REGISTRO-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title text-center" id="myModalLabel">REGISTRATE</h4>
          </div>
          <div class="modal-body">
            <form class="" action="procesor/register_user.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="names" placeholder="Nombres">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="lastnames" placeholder="Apellidos">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="profession" placeholder="Carrera en formación">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" style="color:#185921">*Seleccione Foto de Perfil</label>
                    <input type="file" class="form-control input-lg" name="avatar" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="codigo" placeholder="Código ej:T000xxxx">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-lg" name="password" placeholder="Contraseña">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Registrarme!</button>
                </div>
            </form>

          </div>
         
        </div>
      </div>
    </div>

    <!-- Modal LOGIN-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title text-center" id="myModalLabel">INICIAR SESIÓN</h4>
          </div>
          <div class="modal-body">
            <form class="" method="post" action="procesor/comprobacion.php">
  
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="user" placeholder="Codigo de Savio">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-lg" name="pass" placeholder="contraseña">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Iniciar Sesión</button>
                </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- MODALS END-->

