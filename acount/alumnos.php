<?php 

$ruta =  "../info-users/users.txt";
$usertxt = fopen($ruta, 'r');
$contenido_users = fread($usertxt, filesize($ruta));
fclose($usertxt);


$users = explode("/",$contenido_users);

$lengs = count($users)-1;
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="contenido_users-Type" contenido_users="text/html; charset=utf-8" />
<meta name="viewport" contenido_users="width=device-width, initial-scale=1.0" />
<title>Alumnos | UTBTIC</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/responsive-tables.css">

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/responsive-tables.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
        jQuery('#dyntable2').dataTable( {
            "bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "300px"
        });
        
    });
</script>
</head>

<body>


    <?php include("menu.php"); ?>
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="table-static.html">Alumnos Registrados</a> <span class="separator"></span></li>
            <li>Todos los Alumnos </li>
            
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
            
            <div class="pageicon"><span class="iconfa-table"></span></div>
            <div class="pagetitle">
                <h5>Alumnos Registrado</h5>
                <h1>Todos los Alumnos</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            
                <h4 class="widgettitle">Estudiantes</h4>
                <table id="dyntable" class="table table-bordered responsive">
                    <colgroup>
                        <col class="con0" style="align: center; width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head0 nosort"><input type="checkbox" class="checkall" /></th>
                            <th class="head0">Nombre</th>
                            <th class="head1">Apellido</th>
                            <th class="head0">Código Savio</th>
                            <th class="head1">Carrera</th>
                            <th class="head0">Semestre</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        for ($i=0; $i < $lengs ; $i++) { 
                        
                          $todos = $users[$i];
                        list($name, $lastname, $profesion, $codigo, $contras, $avatar) = explode("|", $todos);
                        
                     ?>
                        <tr class="gradeX">
                          <td class="aligncenter"><span class="center">
                            <input type="checkbox" />
                          </span></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $lastname; ?></td>
                            <td><?php echo $codigo; ?></td>
                            <td class="center"><?php echo $profesion; ?></td>
                            <td class="center">1</td>
                        </tr>
                    <?php 

                    }

                     ?>
                    
                        
                        
                    </tbody>
                </table>
                
                <br />
                
                
                
                <div class="footer">
                    <div class="footer-left">
                        <span>&copy; 2013. Shamcey Admin Template. All Rights Reserved.</span>
                    </div>
                    <div class="footer-right">
                        <span>Designed by: <a href="http://themepixels.com/">ThemePixels</a></span>
                    </div>
                </div><!--footer-->
            
            </div><!--maincontenido_usersinner-->
        </div><!--maincontenido_users-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->
</body>
</html>
