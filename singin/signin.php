<?php include "../connection/connection.php"; ?>

<html><head>
	<meta charset="utf-8">
	<title>Registro</title>
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
	
	
	<script src="/boreal/skeleton/js/jquery.dataTables.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.editor.min.js"></script>
	<script src="/stock-center/js/dataTables.select.min.js"></script>
	<script src="/boreal/skeleton/js/dataTables.buttons.min.js"></script>

	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  type="text/css" media="screen" href="login.css" />
	
	
	
</head>
<body background="../img/background.jpg" class="img-fluid" alt="Responsive image" style="background-repeat: no-repeat; background-position: center center; background-size: cover">

<div class="section"><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1 class="panel-title text-center" contenteditable="true">Registro</h1>
                            </div>
                            <div class="panel-body">
                                <p><strong>Alta Usuario</strong></p><hr>
                                <p>Bienvenido al alta de Usuarioo, aquí deberá ingresar sus datos para crear su entorno de administración</p>
                                <p>Preste Atención a los datos solicitados y como deben ser ingresados</p>
                                <p>Comenzamos!?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><img src="../img/add-img.jpg" class="center-block img-responsive img-thumbnail"></div>
                    <div class="col-md-8">
                        
                        <form action="../singin/formSignIn.php" method="POST" class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-2">
                                <h4><span class="label label-default">Nom. y Apellido</span></h4>
				</div>

			<div class="col-sm-10">
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su Nombre y Apellido" required>
			</div>
				</div>

						
	<div class="form-group">
	<div class="col-sm-2">
                <h5><span class="label label-default">Sexo</span></h4><br>
                
                <select name="sexo">
                 <option value="">Seleccionar</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
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
                
                  while ($valores = mysql_fetch_array($res))
                    {
                        echo '<option value="'.$valores[descripcion].'">'.$valores[descripcion].'</option>';
                    }
                }
                }

                

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
                        echo '<option value="'.$valores[descripcion].'">'.$valores[descripcion].'</option>';
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
                        echo '<option value="'.$valores[descripcion].'">'.$valores[descripcion].'</option>';
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
                        echo '<option value="'.$valores[descripcion].'">'.$valores[descripcion].'</option>';
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
<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
</div>
</div>

		
<div class="form-group">
<div class="col-sm-2">
<h4><span class="label label-default">Observaciones</span></h4>
</div>
<div class="col-sm-10">
<textarea name="descripcion" rows="4" cols="79" class="estilotextarea" placeholder="Ingrese aqui anotaciones"></textarea>
</div>
</div>



<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Registrarse</button>
<button class="btn btn-danger"><a href="../index.html"><span class="glyphicon glyphicon-chevron-left"></a></span> Volver</button>



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
