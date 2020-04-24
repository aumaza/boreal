
<?php  include '../connection/connection.php'; ?>
<?php  include "../functions/functions.php"; ?>


<html><head>
	<meta charset="utf-8">
	<title>Blanquear Password</title>
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
<br>
  <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                     <h1><strong>Blanqueo Password</strong></h1>
                     </div>
                    <hr>
                    </div>
                </div>
            </div>
        </div>
        
       <?php
        
       if($conn){
       
	mysql_select_db('boreal');
	  	
	     if (isset($_POST['A'])) {
	     
                            $nombre = mysql_real_escape_string($_POST["nombre"], $conn);
                            $email = mysql_real_escape_string($_POST["email"], $conn);
                            
                            resetPass($nombre,$email);


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
