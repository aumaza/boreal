<html><head>
	<meta charset="utf-8">
	<title>Upload Tablaturas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../img/img-favicon32x32.png" />
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap-theme.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap-theme.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/fontawesome.css">
	<link rel="stylesheet" href="/boreal/skeleton/css/fontawesome.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/jquery.dataTables.min.css" >

	<script src="/boreal/skeleton/js/jquery-3.4.1.min.js"></script>
	<script src="/boreal/skeleton/js/bootstrap.min.js"></script>
	
	
	<script src="/boreal/skeleton/js/jquery.dataTables.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.editor.min.js"></script>
	<script src="/stock-center/js/dataTables.select.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.buttons.min.js"></script>

	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
	
	
</head>
<body>

<div class="section"><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

<?php include "../../connection/connection.php";
      include "functions/functions.php";

	session_start();
	$varsession = $_SESSION['user'];
	
	
	$sql = "SELECT nombre FROM usuarios where user = '$varsession'";
	mysql_select_db('boreal');
        $retval = mysql_query($sql);
        
        while($fila = mysql_fetch_array($retval)){
	  $nombre = $fila['nombre'];
	  }
      	
	if($varsession == null || $varsession = ''){
	echo '<div class="alert alert-danger" role="alert">';
	echo "Usuario o Contraseña Incorrecta. Reintente Por Favor...";
	echo '<br>';
	echo "O no tiene permisos o no ha iniciado sesion...";
	echo "</div>";
	echo '<a href="../../index.html"><br><br><button type="submit" class="btn btn-primary">Aceptar</button></a>';	
	die();
	}
	
	 create_table_tabs();

	
	
$statusMsg = '';

// File upload path
$targetDir = 'uploads/tabs/';
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('pdf','doc','docx','odt', 'txt');
    
    if(in_array($fileType, $allowTypes)){
    
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
           
            
            // Insert image file name into database
           
           $sqlInsert = "INSERT INTO tabs ".
			  "(file_name,upload_on,user_name,path_folder)".
			  "VALUES ".
			  "('$fileName', NOW(),'$nombre','$targetDir)";

			  mysql_select_db('boreal');
			  $insert = mysql_query($sqlInsert);
           // mysql_select_db('boreal');
           //$insert = mysql_query("INSERT into images (file_name, upload_on,user_name) VALUES ('".$fileName."', NOW(),'$nombre')");
           
            if($insert){
            
			  echo '<div class="alert alert-success" role="alert">';
                          echo "\nBase de Datos Actualizada. \nEl Archivo ".$fileName. " se ha subido correctamente.";
                          echo "</div><hr>";
                          echo '<div class="alert alert-success" role="alert">';
                          echo "<a href='main.php'><button class='btn btn-warning navbar-btn'><span class='glyphicon glyphicon-chevron-left'></span> Volver</button></a>";
                          echo "</div><hr>";
                          
            
                //$statusMsg = "\nBase de Datos Actualizada. \nEl Archivo ".$fileName. " se ha subido correctamente.";
                
            }else{
		  
		  $statusMsg = "\nEl Archivo ".$fileName. " se ha subido correctamente.";  
                
            } 
        }else{
            $statusMsg = "\nUps. Hubo un error subiendo el Archivo";
        }
    }else{
        $statusMsg = "\nUps, solo archivos con extensión: PDF, DOC, DOCX, ODT, TXT son soportados.";
    }
}else{
    $statusMsg = "\nPor favor, seleccione al archivo a subir.";
}


// Display status message
echo $statusMsg;

?>


</div>
</div>
</div>
</div>
</body>
</html>