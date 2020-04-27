<?php include "../connection/connection.php";

if($conn){

$sql = "CREATE TABLE users(".
      "id INT AUTO_INCREMENT,".
      "nombreApellido VARCHAR(35) NOT NULL,".
      "sexo VARCHAR(9) NOT NULL,".
      "instrumento VARCHAR(40) NOT NULL,".
      "genre VARCHAR(40) NOT NULL,".
      "provincia VARCHAR(40) NOT NULL,".
      "localidad VARCHAR(20) NOT NULL,".
      "email VARCHAR(50) NOT NULL,".
      "observaciones VARCHAR(255) NOT NULL,".
      "PRIMARY KEY (id)); ";

	mysql_select_db('boreal');
	$retval = mysql_query($sql, $conn);
	
	if(!$retval)
	{
		mysql_error(); 	
	}
	
	else
	 {	
		echo 'Table create Succesfully\n';
	 }
					
		$nombreApellido = mysql_real_escape_string($_POST["nombre"], $conn);
		$sexo = mysql_real_escape_string($_POST["sexo"], $conn);
    		$instrumento = mysql_real_escape_string($_POST["instrumento"], $conn);
    		$genre = mysql_real_escape_string($_POST["genre"], $conn);
    		$provincia = mysql_real_escape_string($_POST["provincia"], $conn);
    		$localidad = mysql_real_escape_string($_POST["localidad"], $conn);
    		$email = mysql_real_escape_string($_POST["email"], $conn);
    		$avatar = "uploads/avatar/user-blue-img.png";
    		$descripcion = mysql_real_escape_string($_POST["descripcion"], $conn);
    		
    		
	
	
$sqlInsert = "INSERT INTO users ".
"(nombreApellido,sexo,instrumento,genre,provincia,localidad,email,avatar,observaciones)".
"VALUES ".
"('$nombreApellido','$sexo','$instrumento','$genre','$provincia','$localidad','$email','$avatar','$descripcion')";

// mysql_select_db('breaktime');
$q = mysql_query($sqlInsert,$conn);
}

else{
 echo '<div class="alert alert-danger" role="alert">';
  echo 'Could not Connect to Database: ' . mysql_error();
  echo "</div>";
}

?>

<html><head>
	<meta charset="utf-8">
	<title>Registro Realizado</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../img/img-favicon32x32.png" />
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap-theme.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap-theme.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/fontawesome.css">
	<link rel="stylesheet" href="/boreal/skeleton/css/fontawesome.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/jquery.dataTables.min.css" >

	<script src="/boreal/skeleton/js/jquery-3.4.1.min.js"></script>
	<script src="/boreal/skeleton/js/bootstrap.min.js"></script>
	<script src="/boreal/skeleton/js/jquery-3.4.1.min.js"></script>
	
	<script src="/boreal/skeleton/js/jquery.dataTables.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.editor.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.select.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.buttons.min.js"></script>

	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
	
	
</head>
<body>

<div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1 class="panel-title text-center" contenteditable="true">Registro</h1>
                            </div>
                            <div class="panel-body">
                                <p><strong>Nuevo Registro</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php



if(!$q)
{
  echo '<div class="alert alert-danger" role="alert">';
  echo 'Could not enter data: ' . mysql_error();
  echo "</div>";
}

else
{
    echo '<div class="alert alert-success" role="alert">';
    echo "Registro Guardado Exitosamente!!";
    echo "</div>";
    echo "<br><br><br><br>";
    echo '<div class="alert alert-warning" role="alert">';
    echo "Continuá con la creación de un Usuario, con el cuál podrás ingresar a la WEB.";
    echo "</div>";
    echo '<hr> <a href="adduser.php?nombre='.$nombreApellido.'"><input type="button" value="Crear Usuario" class="btn btn-primary"></a>';
}



	//cerramos la conexion
	
	mysql_close($conn);

    
?>



</body>
</html>

