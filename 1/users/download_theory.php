<?php
      include "../../connection/connection.php";
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

	$archivo = basename($_GET['file_name']);
	//echo $archivo;

//Si la variable archivo que pasamos por URL no esta 
//establecida acabamos la ejecucion del script.
if($archivo){
//if (!isset($_GET['file_name']) || empty($_GET['file_name'])) {
   
   $path = 'uploads/theory/'.$archivo;
  
  
//Utilizamos basename por seguridad, devuelve el 
//nombre del archivo eliminando cualquier ruta. 
//$file = basename($_GET['file_name']);

//$path = 'uploads/tabs'.$file;

if (is_file($path))
{
   header('Content-Type: application/force-download');
   header('Content-Disposition: attachment; filename='.$archivo);
   header('Content-Transfer-Encoding: binary');
   header('Content-Length: '.filesize($path));

   readfile($path);
}
}else{
   exit();
   }
?>