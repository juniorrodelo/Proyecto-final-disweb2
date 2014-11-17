<?php 

session_start();

?>

<?php 

$ruta =  "../info-users/users.txt";
$usertxt = fopen($ruta, 'r');
$contenido_users = fread($usertxt, filesize($ruta));
fclose($usertxt);


$users = explode("/",$contenido_users);

$lengs = count($users)-1;
?>

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="dashboard.html"><img src="images/logo.png" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
            <li class="odd">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="count">1</span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label">NOFICACIONES</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Tareas</li>
                        <li><a href="actividad.php"><span class="icon-circle-arrow-up"></span> Subir Proyecto Final <strong>Diseño Web II</strong></a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label">ALUMNOS</span>
                    </a>
                    <ul class="dropdown-menu newusers">
                        <li class="nav-header text-center">Últimos Alumnos Registrados</li>
                        <?php 
                            for ($i=0; $i < $lengs ; $i++) { 
                        
                          $todos = $users[$i];
                        list($name, $lastname, $profesion, $codigo, $contras, $avatar) = explode("|", $todos);

                         ?>
                        <li>
                            <a href="">
                                <img src="../info-users/media/<?php echo $avatar;?>" alt="" class="userthumb" />
                                <strong><?php echo $name . " " . $lastname ; ?></strong>
                                <small><?php echo $profesion; ?></small>
                            </a>
                        </li>
                        <?php 

                        }

                         ?>
                        
                        </ul>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="../info-users/media/<?php echo $_SESSION['avatar'] ?>" alt="" />
                        <div class="userinfo">
                            <h5> Hola <?php echo $_SESSION['nombre'] . " ".  $_SESSION['apellido'];;  ?>
                            </h5>
                            <ul>
                                <li><a href="perfil.php">Perfil </a></li>
                                <li><a href="../procesor/logout.php">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>

<div class="leftpanel">
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Navigation</li>
                <li class="active"><a href="dashboard.php"><span class="iconfa-laptop"></span> ÁREA PERSONAL</a></li>
                <li class=""><a href="404.php"><span class="iconfa-laptop"></span> MIS NOTAS</a></li>
                <li class=""><a href="alumnos.php"><span class="iconfa-laptop"></span> ALUMNOS </a></li>
                <li><a href="media.php"><span class="iconfa-hand-up"></span> MIS ARCHIVOS </a></li>
             
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->