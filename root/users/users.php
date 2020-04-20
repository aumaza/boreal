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

<html lang="es">
<head>

	<title>Alta Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../img/img-favicon32x32.png" />
	<meta charset="utf-8">
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
        
        <div class="container">
   <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-info-sign"></span> Información Util</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
     <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>Tips Utiles</strong></h4>
        </div>
        <div class="modal-body">
          <p><strong>Aquí dejaremos algunos consejos útiles para crear usuarios de manera correcta.-</strong></p>
          <p>1.- Nombre: Al ingresar el nombre y apellido, solo utilice mayúsculas para la primera letra.-</p>
          <p>2.- Usuario: Genere nombres de usuarios cortos, ejemplo (Juan Gonzalez, jgonza).-</p>
          <p>3.- Password: NO utilice progresiones numéricas ni fechas de cumpleaños, ejemplo (1234).-</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cerrar</button>
        </div>
      </div>
    </div>
  </div>
 </div><br>
        
                
        <div class="section">
            <div class="container">
                <div class="row">
                          
                                       
                    <div class="col-md-8">
                        <form action="formUsers.php" method="POST" class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-2">
                                  <span class = "label label-default">Nombre y Apellido</span>
				</div>
				<div class="col-sm-10">
				<input type="text" class="form-control" id="nome" name="nombre" placeholder="Nombre y Apellido" required>
				</div>
				</div>

			<div class="form-group">
				<div class="col-sm-2">
				<span class = "label label-default">Usuario</span>
				</div>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="user" name="user" placeholder="Nombre de Usuario" required>
					</div>
						</div>

				<div class="form-group">
				<div class="col-sm-2">
					<span class = "label label-default">Password</span>
						</div>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" >
					</div>
						</div>

				<div class="form-group">
				<div class="col-sm-2">
					<span class = "label label-default">Repetir Password</span>
						</div>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password1" name="password1" placeholder="Repita Password" >
					</div>
						</div>
						
										
				<div class="form-group">
				<div class="col-sm-2">
				  <span class = "label label-default">Permisos</span>
				</div>
				<div class="col-sm-2">
				<select name="permisos" requered>
				<option value="">----Seleccionar----</option>
				<option value="1">Escritura</option>
				<option value="0">Lectura</option> 
				</select>
				</div>
				</div>

				
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" name="A" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span>  Agregar</button>
<button type="submit" name="B" class="btn btn-info"><span class="glyphicon glyphicon-search"></span>  Buscar</button>
<button type="submit" name="C" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>  Update Password</button>
<button type="submit" name="D" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>  Modificar Permisos</button>
<button type="reset" class="btn btn-primary"><span class="glyphicon glyphicon-erase"></span>  Limpiar</button>
<hr> <a href="../main.php"><input type="button" value="Volver al Menú Principal" class="btn btn-primary"></a>

</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

</body></html>
									
									