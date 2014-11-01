<?php 
session_start();

if ($_POST['user'] !=""  AND $_POST['pass'] !="" ) {
	if ($_POST['user']=="junior" AND $_POST['pass'] == "123") {
		$_SESSION['admin'] = $_POST['user'];
	}else{
		$_SESSION['error'] = "Login Incorrecto";
	}
}else{
	$_SESSION['llene']="llene los campos";
}

header("location:../index.php");


 ?>

