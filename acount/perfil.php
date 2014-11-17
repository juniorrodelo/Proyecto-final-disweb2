<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

	
	jQuery('.taglist .close').click(function(){
		jQuery(this).parent().remove();
		return false;
	});
	
});
</script>
</head>

<body>

        <?php include("menu.php"); ?>

    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="editprofile.html">Other Pages</a> <span class="separator"></span></li>
            <li>Edit Profile</li>
            
            <li class="right">
                <a href="" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-tint"></i> Color Skins</a>
                <ul class="dropdown-menu pull-right skin-color">
                    <li><a href="default">Default</a></li>
                    <li><a href="navyblue">Navy Blue</a></li>
                    <li><a href="palegreen">Pale Green</a></li>
                    <li><a href="red">Red</a></li>
                    <li><a href="green">Green</a></li>
                    <li><a href="brown">Brown</a></li>
                </ul>
            </li>
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h5>Próximamente prodrá actualizar su perfil</h5>
                <h1>Perfil del Estudiante</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                    	<div class="span4 profile-left">
                        
                        <div class="widgetbox profile-photo">
                            <div class="headtitle">
                                <h4 class="widgettitle">Foto de Perfil</h4>
                            </div>
                            <div class="widgetcontent">
                                <div class="profilethumb">
                                    <img src="../info-users/media/<?php echo $_SESSION['avatar'] ?>" alt="" />
                                </div><!--profilethumb-->
                            </div>
                        </div>
                            
                            
                        <div class="widgetbox tags">
                                <h4 class="widgettitle">Cursos</h4>
                                <div class="widgetcontent">
                                    <ul class="taglist">
                                        <li><a href="">Calculo <span class="close">&times;</span></a></li>
                                        <li><a href="">Diseño Web <span class="close">&times;</span></a></li>
                                        <li><a href="">Algoritmos y Programación <span class="close">&times;</span></a></li>
                                        <li><a href="">Álgebra Linéal<span class="close">&times;</span></a></li>
                                        <li><a href="">Inglés III <span class="close">&times;</span></a></li>
                                    </ul>
                                </div>
                        </div>
                            
                        </div><!--span4-->
                        <div class="span8">
                            <form action="editprofile.html" class="editprofileform" method="post">
                                
                                <div class="widgetbox login-information">
                                    <h4 class="widgettitle">Información de la cuenta</h4>
                                    <div class="widgetcontent">
                                        <p>
                                            <label>Código:</label>
                                            <input type="text" name="username" class="input-xlarge" value="<?php echo $_SESSION['codigo'];?>" />
                                        </p>
                                        <p>
                                            <label>Contraseña:</label>
                                            <input type="text" name="email" class="input-xlarge" value="<?php echo $_SESSION['password'];?>" />
                                        </p>
                        
                                    </div>
                                </div>
                                
                                
                                <div class="widgetbox personal-information">
                                    <h4 class="widgettitle">Información Personal</h4>
                                    <div class="widgetcontent">
                                        <p>
                                            <label>Primer Nombre:</label>
                                            <input type="text" name="firstname" class="input-xlarge" value="<?php echo $_SESSION['nombre'];?>" />
                                        </p>
                                        <p>
                                            <label>Primer Apellido:</label>
                                            <input type="text" name="lastname" class="input-xlarge" value="<?php echo $_SESSION['apellido'];?>" />
                                        </p>
                                        
                                        <p>
                                            <label>Carrera:</label>
                                            <input type="text" name="website" class="input-xlarge" value="<?php echo $_SESSION['carrera'];?>" />
                                        </p>
                                    
                                    </div>
                                </div>
                                
                                
                                
                                <p>
                                	<button type="submit" class="btn btn-primary">Actualizar Perfil</button> &nbsp; <a href="dashboard.php">Regresar Al Área Personal</a>
                                </p>
                                
                            </form>
                        </div><!--span8-->
                    </div><!--row-fluid-->
                    
                    <div class="footer">
                        <div class="footer-left">
                            <span>&copy; 2013. Shamcey Admin Template. All Rights Reserved.</span>
                        </div>
                        <div class="footer-right">
                            <span>Designed by: <a href="http://themepixels.com/">ThemePixels</a></span>
                        </div>
                    </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
