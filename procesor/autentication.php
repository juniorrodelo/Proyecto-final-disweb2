<?php 

session_start();

$codigo= $_POST['codigo'];
$password= $_POST['pass'];

$users_root =  "../info-users/users.txt";
$archivo = fopen($users_root, 'r');
$content = fread($archivo, filesize($users_root));
fclose($archivo);


$usuarios = explode("/",$content);

$lengs = count($usuarios)-1;

 $se_encontro = false;

if (!$codigo=="") {
	for ($i=0; $i < $lengs ; $i++) { 
	$pos = stristr($usuarios[$i], $codigo);

		if (!$pos == false) {
		    $ejemplo = $usuarios[$i];
		    list($firts_name, $firts_lastname, $profession, $code, $pass, $profile_avatar) = explode("|", $ejemplo);
		    $se_encontro = true;
		}

	}

	if ($se_encontro == false) {
		header('Location: notfound.php');
	}

}else{
	$campo_vacio = "Debe ingresar un campo";
	echo $campo_vacio;
}


if (strpos($code, $codigo) && strpos($pass, $password)) {
	$_SESSION['admin'] = true;
	
}elseif (strpos($code, $codigo) && !strpos($pass, $password)) {
	$_SESSION['error'] = "La contraseña es incorrecta";

}elseif (empty($codigo) && empty($password)) {
	$_SESSION['error'] = "Debes Ingresar el código y la contraseña";
}

else{
	$_SESSION['error'] = "Debe Ingresar una contraseña";

}

header("location:../login.php");




 ?>

