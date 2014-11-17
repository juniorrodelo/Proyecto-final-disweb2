<?php 

session_start();

if (isset($_SESSION['admin'])) {
	unset($_SESSION['admin']);
	unset($_SESSION['nombre']);
	unset($_SESSION['apellido']);
	unset($_SESSION['carrera']);
	unset($_SESSION['codigo']);
	unset($_SESSION['avatar']);
}

header("location:../index.php")
 ?>