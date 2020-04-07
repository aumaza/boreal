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
	echo '<a href="../../index.html"><br><br><button type="submit" class="btn btn-primary">Aceptar</button></a>';	
	die();
	}
?>

<html style="height: 100%"><head>
	<meta charset="utf-8">
	<title>Boreal User Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../img/img-favicon32x32.png" />
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap-theme.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/bootstrap-theme.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/fontawesome.css">
	<link rel="stylesheet" href="/boreal/skeleton/css/fontawesome.min.css" >
	<link rel="stylesheet" href="/boreal/skeleton/css/jquery.dataTables.min.css" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="/stock-center/js/jquery-3.4.1.min.js"></script>
	<script src="/stock-center/js/bootstrap.min.js"></script>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
</head>
<body background="../../img/background.jpg" class="img-fluid" alt="Responsive image" style="background-repeat: no-repeat; background-position: center center; background-size: cover; height: 100%">

  <!-- User Info -->
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
	<!-- End User Info -->
	
	<div class="container-fluid"> 
	  <div class="row">
	    <div class="col-md-12 text-center"><br>
	      <nav class="navbar navbar-inverse">
  
	<div class="container-fluid">
	  <div class="navbar-header">
	    <a class="navbar-brand"><span class="glyphicon glyphicon-headphones"></span><strong> Boreal Dashboard</strong></a>
	  </div>
	
	
      <ul class="nav navbar-nav">
      <li class="active"><a href="../../logout.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>

<ul class="nav navbar-nav"> 
<div class="container-fluid">
<div class="form-group">
<div class="col-sm-offset-2 col-sm-12">
<button type="submit" name="A" class="btn btn-default"><span class="glyphicon glyphicon-user"></span>  Mis Datos</button>
<button type="submit" name="B" class="btn btn-default"><span class="glyphicon glyphicon-music"></span>  Music</button>
<button type="submit" name="C" class="btn btn-default"><span class="glyphicon glyphicon-book"></span>  Teoría</button>
<button type="submit" name="D" class="btn btn-default"><span class="glyphicon glyphicon-folder-open"></span>  Tablaturas</button>
<button type="submit" name="E" class="btn btn-default"><span class="glyphicon glyphicon-erase"></span>  Limpiar</button>


</div>
</div>
</div>
</ul>
      
                  
</ul>
</div>
</div>
</div>
<!-- End of Dashboard -->

<!-- Body APP -->
<div class="container-fluid"> 
	  <div class="row">
	    <div class="col-md-12 text-center">

</div>
<!-- END OF DASHBOARD -->





</body>
</html>