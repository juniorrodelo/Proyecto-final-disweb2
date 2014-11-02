<?php


if(isset($_POST['send'])){

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

/* PARITR APELIIDO */
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

$target_path = "info-users/media/";
$target_path = $target_path .( $_FILES['avatar']['name']);

if(move_uploaded_file($_FILES['avatar']['tmp_name'], $target_path)) { 
	$profile_avatar=$_FILES['avatar']['name'];
	//echo "<img src=\"../info-users/media/$profile_avatar\">";
} else{
	$empty_error_avatar = true;

}

}
//funcion que valida que sean letras y no numeros con un minimo de 3 y maximo de 28

function valida_name($firts_name) 
{
	$patron ="/^[a-zA-ZáéíóúÁÉÍÓÚÜüñÑ]{3,28}/";
	if(preg_match($patron , $firts_name))
	{
		return true;
	}
	else   
	{
		return false;
	}
}

function valida_lastname($firts_lastname) 
{
	$patron ="/^[a-zA-ZáéíóúÁÉÍÓÚÜüñÑ]{3,28}/";
	if(preg_match($patron , $firts_lastname))
	{
		return true;
	}
	else   
	{
		return false;
	}
}

function valida_codigo($codigo) 
{
	$patron ="/T000/i";
	if(preg_match($patron , $codigo))
	{
		return true;
	}
	else   
	{
		return false;
	}
}

function valida_pass($password) 
{
	if(strlen($password)==6)
	{
		return true;
	}
	else   
	{
		return false;
	}
}


function Registrar($firts_name, $firts_lastname, $profession, $codigo, $password, $profile_avatar)
{
	$file=fopen("info-users/users.txt","a") or die("Problemas");

			fputs($file,$firts_name." | ");
			fputs($file,$firts_lastname." | ");
			fputs($file,$profession." | ");
			fputs($file,$codigo." | ");
			fputs($file,$password." | ");
			fputs($file,$profile_avatar." / "." \n"." \n");
			fclose($file);

			header("location:welcome.php");

			//egistro Correcto";
			/*ob_start(); 
			  header("refresh: 5; url = login.php"); 
			   
			  echo 'Gracias por registrarte, serás redirigido al "INICIO DE SESSION"...'; 

			ob_end_flush();*/
}

       	
	if($_POST)
	{							
		if (valida_name($firts_name)=="") 
		{
			
            $error_name = "<i>* Debes ingresar tus nombres.</i>"."<br/>" ;
            
        }
        
        if(valida_lastname($firts_lastname)=="")
        {
            
            $error_lastname = "* <i>Los apellidos son requeridos</i>"."<br/>";
            
        }

        if(valida_codigo($codigo)=="")
        {
            
            $error_codigo = "<i>* Código incorrecto (solo códigos de Savio)</i>"."<br/>";
            
        }    

		if(valida_pass($password)=="")
		{
			
			$error_password = "<i>* La contraseña debe contener 6 carácteres</i>"."<br/>";
		}

		if($empty_error_avatar == true)
		{
			
			 	$error_avatar = "<i>* Debes Elegir una Imagen de Perfil.</i>"."<br/>";
		}

		if (!valida_name($firts_name)=="" && !valida_lastname($firts_lastname)=="" && !valida_codigo($codigo)=="" && !valida_pass($password)=="" && !$empty_error_avatar == true) {
			Registrar($firts_name, $firts_lastname, $profession, $codigo, $password, $profile_avatar);
		}
			
		 

    }

 ?>