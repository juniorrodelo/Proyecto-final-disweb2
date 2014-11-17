<?php


if(isset($_POST['send'])){

/* PARITR NOMBRE */
$name_project = $_POST['name_project'];
$url_project = $_POST['url_project'];
$name_hosting = $_POST['name_hosting'];
$description = $_POST['description'];
//$actividad_file = $_POST['actividad_file'];



$target_path = "../info-users/files/";
$target_path = $target_path .($_FILES['actividad']['name']);

echo $target_path;

    if(move_uploaded_file($_FILES['actividad']['tmp_name'], $target_path)) { 
        $actividad_file= $_FILES['actividad']['name'];
        //echo "<img src=\"../info-users/media/$profile_avatar\">";

    } else{
        $empty_error_avatar = true;

    }

}


//funcion que valida que sean letras y no numeros con un minimo de 3 y maximo de 28

function valida_name($name_project) 
{
    $patron ="/^[a-zA-ZáéíóúÁÉÍÓÚÜüñÑ]{3,28}/";
    if(preg_match($patron , $name_project))
    {
        return true;
    }
    else   
    {
        return false;
    }
}

function valida_hosting($name_hosting) 
{
    $patron ="/^[a-zA-ZáéíóúÁÉÍÓÚÜüñÑ]{3,28}/";
    if(preg_match($patron , $name_hosting))
    {
        return true;
    }
    else   
    {
        return false;
    }
}

function valida_url($url_project) 
{
    $patron ="/T000/i";
    if(preg_match($patron , $url_project))
    {
        return true;
    }
    else   
    {
        return false;
    }
}



function upload($name_project, $url_project, $name_hosting, $description, $actividad_file)
{
    $file=fopen("../info-users/files/archivos.txt","a") or die("Problemas");

            fputs($file,$name_project." | ");
            fputs($file,$url_project." | ");
            fputs($file,$name_hosting." | ");
            fputs($file,$description." | ");
            fputs($file,$actividad_file." / "." \n"." \n");
            fclose($file);

            //header("location:welcome.php");

}

        
    if($_POST)
    {                           
        if (valida_name($name_project)=="") 
        {
            
            $error_name = "<i>* Debes elegir un nombre para el Proyecto.</i>"."<br/>" ;
            
        }
        
        if(valida_url($url_project)=="")
        {
            
            $error_project_url = "* <i>Cóloca una URL Válida</i>"."<br/>";
            
        }

        if(valida_hosting($name_hosting)=="")
        {
            
            $error_name_hosting = "<i>* Elige un nombre de Hosting</i>"."<br/>";
            
        }    


        if($empty_error_avatar == true)
        {
            
                $error_avatar = "<i>* Debes Elegir un Archivo .Zip ó .Rar .</i>"."<br/>";
        }

        if (!valida_name($name_project)=="" && !valida_url($url_project)=="" && !valida_hosting($name_hosting)=="" && !$empty_error_avatar == true) {
            upload($name_project, $url_project, $name_hosting, $description, $actividad_file);
        }
            
         

    }




 ?>