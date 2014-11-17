<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shamcey - Metro Style Admin Template</title>

<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" type="text/css" />
<link rel="stylesheet" href="css/isotope.css" type="text/css" />
<link rel="stylesheet" href="css/responsive-tables.css">
<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />

<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/charCount.js"></script>
<script type="text/javascript" src="js/charts.js" ></script>
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/colorpicker.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/detectizr.min.js" ></script>
<script type="text/javascript" src="js/elements.js" ></script>
<script type="text/javascript" src="js/excanvas.min.js" ></script>
<script type="text/javascript" src="js/forms.js"></script>
<script type="text/javascript" src="js/fullcalendar.min.js" ></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/jquery.alerts.js" ></script>
<script type="text/javascript" src="js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="js/jquery.bxSlider.min.js" ></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js" ></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="js/jquery.isotope.min.js" ></script>
<script type="text/javascript" src="js/jquery.jgrowl.js" ></script>
<script type="text/javascript" src="js/jquery.slimscroll.js" ></script>
<script type="text/javascript" src="js/jquery.smartWizard.min.js" ></script>
<script type="text/javascript" src="js/jquery.tagsinput.min.js" ></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/media.js" ></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/responsive-tables.js" ></script>
<script type="text/javascript" src="js/ui.spinner.min.js"></script>
<script type="text/javascript" src="js/wysiwyg.js" ></script>
<script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>


<script type="text/javascript" src="prettify/prettify.js"></script>
</head>

<body>

    <?php include("menu.php"); ?>
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="forms.html">Tarea</a> <span class="separator"></span></li>
            <li>Enviar Actividad</li>
            
            
        </ul>
        
        <div class="pageheader">
            
            <div class="pageicon"><span class="iconfa-pencil"></span></div>
            <div class="pagetitle">
                <h5>Tarea</h5>
                <h1>Enviar Actividad</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            
            
            
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Entrega PROYECTO DISEÑO WEB II</h4>
                <div class="widgetcontent nopadding">
                    <form class="stdform stdform2" method="post" action="../procesor/upload.php">
                            <p>
                                <label>Nombre del proyecto</label>
                                <span class="field"><input type="text" name="name_project" id="firstname2" class="input-xxlarge" /></span>
                            </p>
                            
                            <p>
                                <label>URL del proyecto</label>
                                <span class="field"><input type="text" name="url_project" id="lastname2" class="input-xxlarge" /></span>
                            </p>
                            
                            <p>
                                <label>Nombre Hosting</label>
                                <span class="field"><input type="text" name="name_hosting" id="email2" class="input-xxlarge" /></span>
                            </p>
                            
                            <p>
                                <label>Descripción Del proyecto <small>You can put your own description for this field here.</small></label>
                                <span class="field"><textarea cols="80" rows="5"  name="description" id="location2" class="span5"></textarea></span>
                            </p>
                            
                            <p>
                                <label>Subir Archivo .Zip o .Rar</label>
                                <span class="field">
                                <input type="file" class="form-control input-lg" name="actividad" >
                            </p>
                                                    
                            <p class="stdformbutton">
                                <input class="btn btn-primary" name="send">Enviar Actividad</input>
                                <input type="reset" class="btn">Resetiar Envio</input>
                            </p>
                    </form>
                </div><!--widgetcontent-->
            </div><!--widget-->
            
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
