<?php 

ob_start(); 
  header("refresh: 23; url = login.php"); 
ob_end_flush();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>


<link rel="stylesheet" href="assets/css/bootstrap.css" >
<style>
	body{
		background: #0866c6;
	}
.panel-heading {
    padding: 5px 15px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}

.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}

</style>
</head>
<body>
	<div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<strong class=""> BIENVENIDO </strong>
					</div>
					<div class="panel-body">
						<div class="row">
						<div class="center-block">
<iframe width="553" height="315" src="//www.youtube.com/embed/KHlb_NkwRQA?rel=0&autoplay=1;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>						</div>
						
					</div>
					<div class="panel-footer ">
						Si no tienes una cuenta puedes <a href="#" onClick=""> Registrarte </a>
					</div>
                </div>
			</div>
</body>
</html>

