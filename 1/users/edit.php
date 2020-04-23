<?php include "../../connection/connection.php";

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
	
      $id = $_GET['id'];
      $sql = "SELECT * FROM users WHERE id = '$id'";
      mysql_select_db('boreal');
      $resultado = mysql_query($sql,$conn);
      $fila = mysql_fetch_assoc($resultado);
	
?>

<html><head>
	<meta charset="utf-8">
	<title>Editar Datos</title>
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
	<script src="/stock-center/js/dataTables.select.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.buttons.min.js"></script>

	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
	
	
</head>
<body>
<!-- User Info -->
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12 text-center"><br>
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

<div class="section"><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1 class="panel-title text-center" contenteditable="true">Editar Datos</h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><img src="../../img/edit-img.png" class="center-block img-responsive img-thumbnail"></div>
                    <div class="col-md-8">
                        
                        <form action="form_edit.php" method="POST" class="form-horizontal" role="form">
                        <input type="hidden" id="id" name="id" value="<?php echo $fila['id']; ?>" />
                        
                            <div class="form-group">
                                <div class="col-sm-2">
                                <h4><span class="label label-default">Nom. y Apellido</span></h4>
				</div>

			<div class="col-sm-10">
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su Nombre y Apellido"  value="<?php echo $fila['nombreApellido']; ?>">
			</div>
				</div>

						
	<div class="form-group">
	<div class="col-sm-2">
                <h5><span class="label label-default">Sexo</span></h4><br>
                
                <select name="sexo">
                 <option value="">Seleccionar</option>
                  <option value="Masculino" <?php if($fila['sexo']=='Masculino') echo 'selected'; ?>>Masculino</option>
                  <option value="Femenino" <?php if($fila['sexo']=='Femenino') echo 'selected'; ?>>Femenino</option>
                </select>                
              </div>
              </div>

<div class="form-group">
            <div class="col-sm-2">
            <h4><span class="label label-default">Instrumento Ejecutado</span><br><br></h4>
            <select name="instrumento">
              <option value="">Seleccionar</option>
              
             <?php
             
             
               if($conn){

              $query = "SELECT * FROM instrumentos order by descripcion ASC";
              mysql_select_db('boreal');
              $res = mysql_query($query);

              if($res)
              {
		 
		 
                  while ($valores = mysql_fetch_array($res)){
                  
                      	  echo '<option value="'.$valores[descripcion].'" '.(($fila['instrumento']== $valores[descripcion])?'selected="selected"':"").'>'.$valores[descripcion].'</option>';
                        }
                        
                    }
                    
                }
               // }

                

                ?>
                </select></div></div><hr>

<div class="form-group">
            <div class="col-sm-2">
            <h4><span class="label label-default">Género Musical</span><br><br></h4>
            <select name="genre">
              <option value="">Seleccionar</option>
              
             <?php
             
             
               if($conn){

              $query = "SELECT * FROM genre order by descripcion ASC";
              mysql_select_db('boreal');
              $res = mysql_query($query);

              if($res)
              {
                
                  while ($valores = mysql_fetch_array($res))
                    {
                        echo '<option value="'.$valores[descripcion].'" '.(($fila['genre']== $valores[descripcion])?'selected="selected"':"").'>'.$valores[descripcion].'</option>';
                        
                    }
                }
                }

                

                ?>
                </select></div></div><hr>
                

<div class="form-group">
            <div class="col-sm-2">
            <h4><span class="label label-default">Provincias</span><br><br></h4>
            <select name="provincia">
              <option value="">Seleccionar</option>
              
             <?php
             
             
               if($conn){

              $query = "SELECT * FROM provincias order by descripcion ASC";
              mysql_select_db('boreal');
              $res = mysql_query($query);

              if($res)
              {
                
                  while ($valores = mysql_fetch_array($res))
                    {
                        echo '<option value="'.$valores[descripcion].'" '.(($fila['provincia']== $valores[descripcion])?'selected="selected"':"").'>'.$valores[descripcion].'</option>';
                       
                    }
                }
                }

                

                ?>
                </select></div></div><hr>

<div class="form-group">
            <div class="col-sm-2">
            <h4><span class="label label-default">Localidad</span><br><br></h4>
            <select name="localidad">
              <option value="">Seleccionar</option>
              
             <?php
             
             
               if($conn){

              $query = "SELECT * FROM localidades order by descripcion ASC";
              mysql_select_db('boreal');
              $res = mysql_query($query);

              if($res)
              {
                
                  while ($valores = mysql_fetch_array($res))
                    {
                        echo '<option value="'.$valores[descripcion].'" '.(($fila['localidad']== $valores[descripcion])?'selected="selected"':"").'>'.$valores[descripcion].'</option>';
                       
                    }
                }
                }

                mysql_close($conn);

                ?>
                </select></div></div><hr>


<div class="form-group">
<div class="col-sm-2 ">
<h4><span class="label label-default">E-mail</span></h4>
</div>
<div class="col-sm-10 ">
<input type="email" class="form-control" id="email" name="email" placeholder="E-mail"  value="<?php echo $fila['email']; ?>">
</div>
</div>

		
<div class="form-group">
<div class="col-sm-2">
<h4><span class="label label-default">Observaciones</span></h4>
</div>
<div class="col-sm-10">
<textarea name="descripcion" rows="4" cols="79" class="estilotextarea" placeholder="Ingrese aqui anotaciones"  value="<?php echo $fila['observaciones']; ?>"></textarea>
</div>
</div>



<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Editar</button>



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
