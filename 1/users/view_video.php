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
	
	$video = $_GET['file_name'];
	
	
	
	
	
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
	<link rel="stylesheet" href="/boreal/skeleton/videoPlayer/css/jplayer.blue.monday.css" >
	<link rel="stylesheet" href="/boreal/skeleton/videoPlayer/css/main.css" >
	

	<script src="/boreal/skeleton/js/jquery-3.4.1.min.js"></script>
	<script src="/boreal/skeleton/js/bootstrap.min.js"></script>
	
	
	<script src="/boreal/skeleton/js/jquery.dataTables.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.editor.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.select.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.buttons.min.js"></script>
	<script src="/boreal/skeleton/videoPlayer/js/jquery.jplayer.min.js"></script>
	<script src="/boreal/skeleton/videoPlayer/js/jquery.min.js"></script>
	<script src="/boreal/skeleton/videoPlayer/js/main.js"></script>
	
	
	
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
<!-- JPlayer Script -->
 


<script>
$(document).ready(function(){
        $("#jquery_jplayer_2").jPlayer({
        ready: function () {
            $(this).jPlayer("setMedia", {
                m4a: "uploads/video/<?php echo $video; ?>",
                avi: "uploads/video/<?php echo $video; ?>"
                });
        },
        ended: function (event) {
            $("#jquery_jplayer_2").jPlayer("play", 0);
        },
        swfPath: "../../skeleton/videoPlayer/swf/Jplayer.swf",
        supplied: "m4v, ogv, mp4, avi",
        cssSelectorAncestor: "#jp_interface_2"
    })
    .bind($.jPlayer.event.play, function() { // pause other instances of player when current one play
            $(this).jPlayer("pauseOthers");
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
		<h1 class="panel-title text-left" contenteditable="true"><img src="../../img/tvplayer-img.png" alt="Avatar" class="avatar" ><strong><strong> Video Player</strong></h1>
		<hr>
		<h1 class='panel-title text-left' contenteditable='true'><span class='glyphicon glyphicon-music'></span><strong> Estás Viendo: </strong><?php echo $video; ?></h1>
		</div>
	    
		</div>
	      </div>
	    </div>



<!-- Video Player -->

<div class="example">
    <div>
         <div class="players">
            <h2>Video player</h2>
            <div class="jp-video jp-video-270p">
                <div class="jp-type-single">
                    <div id="jquery_jplayer_2" class="jp-jplayer"></div>
                    <div id="jp_interface_2" class="jp-interface">
                        <div class="jp-video-play"></div>
                        <ul class="jp-controls">
                            <li><a href="uploads/video/<?php echo $video; ?>" class="jp-play" tabindex="1">play</a></li>
                            <li><a href="uploads/video/<?php echo $video; ?>" class="jp-pause" tabindex="1">pause</a></li>
                            <li><a href="uploads/video/<?php echo $video; ?>" class="jp-stop" tabindex="1">stop</a></li>
                            <li><a href="" class="jp-mute" tabindex="1">mute</a></li>
                            <li><a href="" class="jp-unmute" tabindex="1">unmute</a></li>
                        </ul>
                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                        <div class="jp-current-time"></div>
                        <div class="jp-duration"></div>
                    </div>
                    <div id="jp_playlist_2" class="jp-playlist">
                        <ul>
                            <li><?php echo $video; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Video Player -->


</div>
</div>

</body>
</html>