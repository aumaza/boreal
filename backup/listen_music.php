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
	
	$audio = $_GET['file_name'];
	
	
	
	
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

	<link rel="stylesheet" href="/boreal/skeleton/css/jplayer.blue.monday.css" >
	

	<script src="/boreal/skeleton/js/jquery-3.4.1.min.js"></script>
	<script src="/boreal/skeleton/js/bootstrap.min.js"></script>
	
	
	<script src="/boreal/skeleton/js/jquery.dataTables.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.editor.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.select.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.buttons.min.js"></script>
	<script src="/boreal/skeleton/jPlayer-2.1.0/jquery.jplayer/jquery.jplayer.js"></script>
	<script src="/boreal/skeleton/jPlayer-2.1.0/add-on/jplayer.playlist.js"></script>
		
	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
<!-- JPlayer Script -->
<script>

      $(document).ready(function(){
    $("#jquery_jplayer_1").jPlayer({
        ready: function () {
            $(this).jPlayer("setMedia", {
                mp3: "uploads/music/<?php echo $audio; ?>",
                ogg: "uploads/music/<?php echo $audio; ?>",
                flac: "uploads/music/<?php echo $audio; ?>"
            }).jPlayer("stop"); // Wait until to press play button
        },
        ended: function (event) {
            $(this).jPlayer("play");
        },
        swfPath: "../../skeleton/jPlayer-2.1.0/jquery.jplayer/Jplayer.swf", // Path to SWF Player
        supplied: "mp3, oga, flac", // Allow formats
        cssSelectorAncestor: "#jp_container_1", //ID del contenedor de la interfaz
        useStateClassSkin: true, //(Default: false): establece si se utilizara un skin personalizada o el diseno por defecto
	autoBlur: true, // (Default: True) Permite controlar el foco del elemento par hacer cambios con CSS
	smoothPlayBar: true, //(Default: false): Animacion de la barra de progreso al dar click para avanzar
	keyEnabled: true, // (Default: false) Habilitar Atajos de Teclado
	remainingDuration: true, //(Default: false) : Muestra el Tiempo Restante en GUI de Tiempo
	toggleDuration: true //(Default: false) : Alterna la duracion restante al hacer click en el
        
    })
    .bind($.jPlayer.event.play, function() { // pause other instances of player when current one play
            $(this).jPlayer("pauseOthers");
    });
    
});

  </script>
  <!-- END JPlayer Script -->

 
 
  
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
<body  background="../../img/studio-img.jpg" class="img-fluid" alt="Responsive image" style="background-repeat: no-repeat; background-position: center center; background-size: cover; height: 100%">

  <!-- User Info -->
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12 text-center">
      <br>
	<a href="main.php"><button><span class="glyphicon glyphicon-chevron-left"></span> Volver</button></a>
        
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
<div class="container">
<div class='row'>
	      <div class='col-sm-12'>
		<div class='panel panel-primary'>
		  <div class='panel-heading'>
		<h1 class="panel-title text-left" contenteditable="true"><img src="../../img/player-img.png" alt="Avatar" class="avatar" ><strong><strong> Audio Player</strong></h1>
		<hr>
		<h1 class='panel-title text-left' contenteditable='true'><span class='glyphicon glyphicon-music'></span><strong> Estás escuchando: </strong><?php echo $audio; ?></h1>
		</div>
	    
		</div>
	      </div>
	    </div>
<!-- Audio Player -->
<div class="container">
<div class="row">
<div class="col-sm-12">

<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
  <div class="jp-type-single">
    <div class="jp-gui jp-interface">
      <div class="jp-volume-controls">
        <button class="jp-mute btn-default" role="button" tabindex="0"><span class="glyphicon glyphicon-volume-off"></span> Mute</button>
        <button class="jp-volume-max btn-default" role="button" tabindex="0"><span class="glyphicon glyphicon-volume-up"></span> Max Volume</button>
        <div class="jp-volume-bar">
          <div class="jp-volume-bar-value"></div>
        </div>
      </div>
      <div class="jp-controls-holder">
        <div class="jp-controls">
          <button class="jp-play btn-success" role="button" tabindex="0"><span class="glyphicon glyphicon-play-circle"></span> Play</button>
          <button class="jp-stop btn-danger" role="button" tabindex="0"><span class="glyphicon glyphicon-stop"></span> Stop</button>
        </div>
        <div class="jp-progress">
          <div class="jp-seek-bar">
            <div class="jp-play-bar"></div>
          </div>
        </div>
        <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
        <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
        <div class="jp-toggles">
          <button class="jp-repeat btn-default" role="button" tabindex="0"><span class="glyphicon glyphicon-repeat"></span> Repeat</button>
        </div>
      </div>
    </div>
    <div class="jp-details">
      <div class="jp-title" aria-label="title">&nbsp;</div>
    </div>
    
  </div>
</div>

</div>
</div>
</div>


<!-- End Audio Player -->


</div>
</div>

</body>
</html>