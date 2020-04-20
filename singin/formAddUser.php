
<?php  include '../connection/connection.php'; ?>
<?php  include "../functions/functions.php"; ?>


<html><head>
	<meta charset="utf-8">
	<title>Alta de Usuario</title>
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

	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
</head>
<body>

  <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title text-center" contenteditable="true">Alta Usuarios</h1>
                            </div>
                            <div class="panel-body">
                                <p>Nuevo Usuario</p>
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
                            $permisos = 1;
                            
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
<hr> <a href="/boreal/logout.php"><input type="button" value="Ingresar" class="btn btn-primary"></a>
</div>
</div>
</div>


</body>
</html>
