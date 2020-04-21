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

	<script src="/boreal/skeleton/js/jquery-3.4.1.min.js"></script>
	<script src="/boreal/skeleton/js/bootstrap.min.js"></script>
	
	
	<script src="/boreal/skeleton/js/jquery.dataTables.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.editor.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.select.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.buttons.min.js"></script>
	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
	<script>

      $(document).ready(function(){
      $('#myTable').DataTable({
      "order": [[1, "asc"]],
      "language":{
        "lengthMenu": "Mostrar _MENU_ registros por pagina",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtrada de _MAX_ registros)",
        "loadingRecords": "Cargando...",
        "processing":     "Procesando...",
        "search": "Buscar:",
        "zeroRecords":    "No se encontraron registros coincidentes",
        "paginate": {
          "next":       "Siguiente",
          "previous":   "Anterior"
        },
      }
    });

  });

  </script>
  
  <style>
.avatar {
  vertical-align: middle;
  horizontal-align: right;
  width: 60px;
  height: 60px;
  border-radius: 60%;
}
</style>
	
</head>
<body>

  <!-- User Info -->
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12 text-center">
	<a href="../../logout.php"><button><span class="glyphicon glyphicon-log-out"></span> Salir</button></a>
        
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
	
	</head>
<body >

<div class="section"><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h1 class="panel-title text-left" contenteditable="true"><img src="../../img/leaf-img.png" alt="Avatar" class="avatar" ><strong> Dashboard Usuario:</strong> <?php echo $nombre; ?></h1>
                            
                            </div>
                           
                           </div>
                           
      <div class="row">
       <div class="col-sm-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
	    <h4>Todo el material que subas será visto por todos los usuarios de Boreal</h4>
	    <a href="forms/avatar/update_avatar.php"><button type="submit" class="btn btn-warning navbar-btn"><span class="glyphicon glyphicon-refresh"></span> Cambiar Avatar</button></a>
	    <a href="forms/images/upload_img.php"><button type="submit" class="btn btn-warning navbar-btn"><span class="glyphicon glyphicon-cloud-upload"></span> Subir Imagen</button></a>
	    <a href="forms/tabs/upload_tabs.php"><button type="submit" class="btn btn-warning navbar-btn" ><span class="glyphicon glyphicon-cloud-upload"></span> Subir Tablaturas</button></a>
            <a href="forms/theory/upload_theory.php"><button type="submit" class="btn btn-warning navbar-btn" ><span class="glyphicon glyphicon-cloud-upload"></span> Subir Teoría</button></a>
            <a href="forms/music/upload_music.php"><button type="submit" class="btn btn-warning navbar-btn" ><span class="glyphicon glyphicon-cloud-upload"></span> Subir Música</button></a>
            </div>
	    
     </div>
   </div>
</div>

                       
      <form action="main.php" method="post">
       <div class="row">
       <div class="col-sm-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
	    
	    <button type="submit" class="btn btn-success navbar-btn" name="A"><span class="glyphicon glyphicon-user"></span> Mis Datos</button>
	    <button type="submit" class="btn btn-success navbar-btn" name="B"><span class="glyphicon glyphicon-headphones"></span> Mi Música</button>
	    <button type="submit" class="btn btn-success navbar-btn" name="C"><span class="glyphicon glyphicon-headphones"></span> Musica</button>
            <button type="submit" class="btn btn-success navbar-btn" name="D"><span class="glyphicon glyphicon-book"></span> Teoría</button>
	    <button type="submit" class="btn btn-success navbar-btn" name="E"><span class="glyphicon glyphicon-music"></span> Tablaturas</button>
            <button type="submit" class="btn btn-success navbar-btn" name="F"><span class="glyphicon glyphicon-eye-open"></span> Otros Usuarios</button>
           </div>
	    
     </div>
   </div>
</div>





<?php


if($conn)
{
   
            
	switch (isset($_POST)){
               
               case isset($_POST['A']):

                    user_bio($nombre);
                    break;


               case isset($_POST['B']):

                   
                    break;

                case isset($_POST['C']):

                   
                    break;

                case isset($_POST['D']):

                    
                    break;


                case isset($_POST['E']):

                    
                    break;
                    
                case isset($_POST['F']):

                    others_users();
                    break;
                    
                              
       }


  }
   
  
   
   else
    {
      echo 'Connection Failure...';   
    }
    
    mysql_close($conn);
    
    ?>

</div>
</form>
                        
</div>
</div>
</div>
</div>


</body>
</html>