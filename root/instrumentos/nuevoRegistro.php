<?php include "../../connection/connection.php"; 

	session_start();
	$varsession = $_SESSION['user'];
	
	if($varsession == null || $varsession = ''){
	echo '<div class="alert alert-danger" role="alert">';
	echo "Usuario o Contraseña Incorrecta. Reintente Por Favor...";
	echo '<br>';
	echo "O no tiene permisos o no ha iniciado sesion...";
	echo "</div>";
	echo '<a href="../../index.html"><br><br><button type="submit" class="btn btn-primary">Aceptar</button></a>';	
	die();
	}

?>
<html><head>
	<meta charset="utf-8">
	<title>Nueva Instrumento</title>
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
	<script src="/boreal/skeleton/js/dataTables.select.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.buttons.min.js"></script>

	
</head>
<body background="../../img/background.jpg" class="img-fluid" alt="Responsive image" style="background-repeat: no-repeat; background-position: center center; background-size: cover; height: 100%"><br>

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
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h1 class="panel-title text-center" contenteditable="true">Instrumentos - Nueva Instrumento</h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><img src="../../img/add-img.jpg" class="center-block img-responsive img-thumbnail"></div>
                    <div class="col-md-8">
                        <form action="../instrumentos/formInstrumentos.php" method="POST" class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="instrumento" class="control-label">Provincia</label>
			</div>

			<div class="col-sm-10">
				<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Instrumento">
			</div>
				</div>
									

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>  Agregar</button>
							<hr> <a href="../instrumentos/instrumentos.php"><input type="button" value="Volver" class="btn btn-primary"></a>
							     <a href="/boreal/root/main.php"><input type="button" value="Volver al Menú Principal" class="btn btn-primary"></a>
					
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





</body>
</html>