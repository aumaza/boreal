<?php
// Include the database configuration file
include "../../../connection/connection.php";
include "functions.php";



	echo 'estoy aca';
	
$statusMsg = '';

// File upload path
$targetDir = "uploads/images";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["save"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','doc','docx','odt');
    
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            
            // Insert image file name into database
            
            $sqlInsert = "INSERT INTO images ".
			  "(file_nam,upload_on,user)".
			  "VALUES ".
			  "('$fileName', 'NOW()')";


			  $insert = mysql_query($sqlInsert,);
            
            //$insert = mysql_query("INSERT into images (file_name, upload_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "El Archivo ".$fileName. " se ha subido correctamente.";
            }else{
                $statusMsg = "Error al Subir el Archivo, por favor intente nuevamente.";
            } 
        }else{
            $statusMsg = "Ups. Hubo un error subiendo el Archivo";
        }
    }else{
        $statusMsg = 'Ups, solo archivos con extensión: JPG, JPEG, PNG, GIF, DOC, DOCX, OTD & PDF son soportados.';
    }
}else{
    $statusMsg = 'Por favor, seleccione al archivo a subir.';
}

// Display status message
echo $statusMsg;

?>