<?php  include "../../functions/functions.php"; ?>
<?php  include "../../connection/connection.php"; 

	session_start();
	$varsession = $_SESSION['user'];
	
	if($varsession == null || $varsession = ''){
	echo '<div class="alert alert-danger" role="alert">';
	echo "Usuario o Contraseña Incorrecta. Reintente Por Favor...";
	echo '<br>';
	echo "O no tiene permisos o no ha iniciado sesion...";
	echo "</div>";
	echo '<a href="../index.html"><br><br><button type="submit" class="btn btn-primary">Aceptar</button></a>';	
	die();
	}



?>


<html><head>
	<meta charset="utf-8">
	<title>Usuarios</title>
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

	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
</head>
<body background="../../img/background.jpg" class="img-fluid" alt="Responsive image" style="background-repeat: no-repeat; background-position: center center; background-size: cover; height: 100%">

<div class="container-fluid">
      <div class="row">
      <div class="col-md-12 text-center">
	<button><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['user'] ?></button>
	<?php setlocale(LC_ALL,"es_ES"); ?>
	<button><span class="glyphicon glyphicon-time"></span> <?php echo "Hora Actual: " . date("H:i"); ?></button>
	 <?php setlocale(LC_ALL,"es_ES"); ?>
	<button><span class="glyphicon glyphicon-calendar"></span> <?php echo "Fecha Actual: ". strftime("%A %d de %B del %Y"); ?> </button>
	</div>
	</div>
	</div>
	<br>

  <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1 class="panel-title text-center" contenteditable="true">Alta Usuarios</h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       <?php
        
       if($conn){
       
	mysql_select_db('boreal');
	  	
	     if (isset($_POST['A'])) {
	     
			    
                            createTable();
                            $nombre = mysql_real_escape_string($_POST["nombre"], $conn);
                            $user = mysql_real_escape_string($_POST["user"], $conn);
                            $pass1 = mysql_real_escape_string($_POST["password"], $conn);
                            $pass2 = mysql_real_escape_string($_POST["password1"], $conn);
                            $permisos = mysql_real_escape_string($_POST["permisos"], $conn);
                            
                            agregarUser($nombre,$user,$pass1,$pass2,$permisos);


                             } else if (isset($_POST['B'])) {

                                        
                                        $nombre = mysql_real_escape_string($_POST["nombre"], $conn);
                                        buscarUser($nombre);

                                      } else if (isset($_POST['C'])) {

                                        $user = mysql_real_escape_string($_POST["user"], $conn);
                                        $pass1 = mysql_real_escape_string($_POST["password"], $conn);
                                        $pass2 = mysql_real_escape_string($_POST["password1"], $conn);
                                        updatePass($user,$pass1,$pass2);

                                      } else if (isset($_POST['D'])) {

                                        $user = mysql_real_escape_string($_POST["user"], $conn);
                                        $pass1 = mysql_real_escape_string($_POST["password"], $conn);
                                        $pass2 = mysql_real_escape_string($_POST["password1"], $conn);
                                        $permisos = mysql_real_escape_string($_POST["permisos"], $conn);
                                        cambiarPermisos($user,$pass1,$pass2,$permisos);

                                      }

                                    } else {

                                      mysql_error();

                                    }

  //cerramos la conexion
  
  mysql_close($conn);


?>
<div class="container">
<div class="row">
<div class="col-md-12">
<hr> <a href="users.php"><input type="button" value="Volver" class="btn btn-primary"></a>
</div>
</div>
</div>


</body>
</html>
