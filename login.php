
<?php 
session_start();


if (isset($_SESSION['admin'])) {
  header("location:acount/dashboard.html");
  //echo "Bienvenido ".$_SESSION['admin'];
}else{

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>


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
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<strong class=""> Iniciar Sesión</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="login.php" method="POST">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
										<label for=""><?php if(isset($error_login)){ echo "<br/>".$error_login;} ?></label>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Codigo de Savio" name="codigo" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Contraseña" name="pass" type="password" value="">
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" name="send" value="Iniciar Sesión">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						Si no tienes una cuenta puedes <a href="#" onClick=""> Registrarte </a>
					</div>
                </div>
			</div>
</body>
</html>

<?php 
  if (isset($_SESSION['llene']) ) {
    echo $_SESSION['llene'];
    unset($_SESSION['llene']);

  }elseif (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
  }
}

 ?>