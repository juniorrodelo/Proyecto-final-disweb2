<?php


/* PARITR NOMBRE */
$fullname = $_POST['names'];
		$name_parts = preg_split("/\s+/", $fullname);
		//print_r($name_parts);
		if (count($name_parts) == 2) {
		$firts_name = $name_parts [0];

		$second_name = $name_parts [1];

		}elseif (count($name_parts) == 1) {
			$firts_name = $name_parts [0];
		}

/* PARITR NOMBRE */
$fullastname = $_POST['lastnames'];
		$lastname_parts = preg_split("/\s+/", $fullastname);
		//print_r($name_parts);
		if (count($lastname_parts) == 2) {
		$firts_lastname = $lastname_parts [0];

		$second_lasname = $lastname_parts [1];

		}elseif (count($lastname_parts) == 1) {
			$firts_lastname = $lastname_parts [0];
		}

$codigo = $_POST['codigo'];

$password = $_POST['password'];

$profession = $_POST['profession'];


/* SUBIENDO FOTO DE PERFIL */

$target_path = "../info-users/media/";
$target_path = $target_path .( $_FILES['avatar']['name']);

if(move_uploaded_file($_FILES['avatar']['tmp_name'], $target_path)) { 
	$profile_avatar=$_FILES['avatar']['name'];
	//echo "<img src=\"../info-users/media/$profile_avatar\">";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}


/* SUBIENDO FOTO DE PERFIL (FIN) */



$file=fopen("../info-users/users.txt","a") or die("Problemas");


  fputs($file,$firts_name." | ");
  fputs($file,$firts_lastname." | ");
  fputs($file,$profession." | ");
  fputs($file,$codigo." | ");
  fputs($file,$password." | ");
  fputs($file,$profile_avatar." | "." / "." \n");
  fclose($file);



  echo "Registro Correcto";
  ?>