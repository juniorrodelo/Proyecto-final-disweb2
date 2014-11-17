<?php include("procesor/register_user.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<style>

	i{
		color: red;
	}

	</style>


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
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<strong class=""> REGISTRARME!</strong>
					</div>
					<div class="panel-body">
					<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
									</div>
								</div>
						<form class="" action="register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                	
                	<?php if(isset($_POST['send'])){ ?>
                	<label for=""><?php if(isset($error_name)){ echo "<br/>".$error_name;} ?></label>
                    <input type="text" class="form-control input-lg" name="names" value="<?php if(isset($firts_name)){ echo $firts_name;} ?>"  >
                    <?php }else{ ?>
                    	<input type="text" class="form-control input-lg" name="names" placeholder="Nombres"  >
                    <?php } ?>
                </div>

                <div class="form-group">
                	 <?php if(isset($_POST['send'])){ ?>
               		<label for=""><?php if(isset($error_lastname)){ echo $error_lastname;} ?></label>
					<input type="text" class="form-control input-lg" name="lastnames" value="<?php if(isset($firts_lastname)){ echo $firts_lastname;} ?>"  >
					<?php }else{ ?>
                    <input type="text" class="form-control input-lg" name="lastnames" placeholder="Apellidos">
                     <?php } ?>
                </div>

                <div class="form-group">
                	<label for=""><?php if(isset($mn1)){ echo $mn1;} ?></label>
                    <input type="text" class="form-control input-lg" name="profession" placeholder="Carrera en formación">
                </div>

                <div class="form-group">
                	<label for=""><?php if(isset($error_avatar)){ echo $error_avatar;} ?></label>
                    <label for="exampleInputFile" style="color:#185921">*Seleccione Foto de Perfil</label>
                    <input type="file" class="form-control input-lg" name="avatar" >
                </div>

                <div class="form-group">
                	<?php if(isset($_POST['send'])){ ?>
               		<label for=""><?php if(isset($error_codigo)){ echo $error_codigo;} ?></label>
               		<input type="text" class="form-control input-lg" name="codigo" value="<?php if(isset($codigo)){ echo $codigo;} ?>"  >
                    <?php }else{ ?>
                    <input type="text" class="form-control input-lg" name="codigo" placeholder="Código ej:T000xxxx">
                     <?php } ?>
                </div>

                <div class="form-group">
                	<label for=""><?php if(isset($error_password)){ echo $error_password;} ?></label>
                    <input type="password" class="form-control input-lg" name="password" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <input type="submit" name="send" class="btn btn-success btn-lg btn-block" value="Registrarme!">
                </div>
            </form>
					</div>
					<div class="panel-footer ">
						Si ya estas Registrado <a href="login.php" onClick=""> Inicia Sesión </a>
					</div>
                </div>
			</div>
</body>
</html>