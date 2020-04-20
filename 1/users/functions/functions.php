<?php

function user_bio($varnombre){
  
/*
 * Esta funcion carga los datos del usuario que ha iniciado sesion
 * Dentro de la tabla que muestra los datos bio podra editar los mismos
 *
 */
  
  
$sql = "SELECT * FROM users where nombreApellido = '$varnombre'";
         mysql_select_db('boreal');
            $retval = mysql_query($sql);
            
            
      echo "<div class='row'>
       <div class='col-sm-12'>
	<div class='panel panel-default'>
	    <div class='panel-heading'>";
	    echo "Mis Datos";
	    echo "</div>
	    
     </div>
   </div>
</div>";

                    echo "<table class='table table-responsive-sm table-striped' id='myTable'>";
                    echo "<thead>
              
                    <th class='text-nowrap text-center'>ID</th>
                    <th class='text-nowrap text-center'>Nombre y Apellido</th>
                    <th class='text-nowrap text-center'>Sexo</th>
                    <th class='text-nowrap text-center'>Instrumento Ejecutado</th>
                    <th class='text-nowrap text-center'>Género Musical</th>
                    <th class='text-nowrap text-center'>Provincia</th>
                    <th class='text-nowrap text-center'>Localidad</th>
                    <th class='text-nowrap text-center'>E-Mail</th>
                    <th class='text-nowrap text-center'>Observaciones</th>
                    <th>&nbsp;</th>
                    </thead>";

                    while($fila = mysql_fetch_array($retval))
                    {

                          // Listado normal
                          echo "<tr>";   
                          echo "<td align=center>".$fila['id']."</td>";
                          echo "<td align=center>".$fila['nombreApellido']."</td>";
                          echo "<td align=center>".$fila['sexo']."</td>";
                          echo "<td align=center>".$fila['instrumento']."</td>";
                          echo "<td align=center>".$fila['genre']."</td>";
                          echo "<td align=center>".$fila['provincia']."</td>";
                          echo "<td align=center>".$fila['localidad']."</td>";
                          echo "<td align=center>".$fila['email']."</td>";
                          echo "<td align=center>".$fila['observaciones']."</td>";
                          echo "<td class='text-nowrap'>";
                          echo '<a href="edit.php?id='.$fila['id'].'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>';
			  echo "</td>";
                          echo "</tr>";
                         
                    }
      
                        echo "</table>";
                        
                        mysql_close($conn);
                        
}


function others_users(){

$sql = "SELECT * FROM users";
         mysql_select_db('boreal');
            $retval = mysql_query($sql);
              

                    $i = 0;
                    $count = 0;
                    
       echo "<div class='row'>
	      <div class='col-sm-12'>
		<div class='panel panel-default'>
		  <div class='panel-heading'>";
		echo "Otros Usuarios";
		echo "</div>
	    
		</div>
	      </div>
	    </div>";


                    echo "<table class='table table-responsive-sm table-striped' id='myTable'>";
                    echo "<thead>
              
                    <th class='text-nowrap text-center'>Nombre y Apellido</th>
                    <th class='text-nowrap text-center'>Sexo</th>
                    <th class='text-nowrap text-center'>Instrumento Ejecutado</th>
                    <th class='text-nowrap text-center'>Género Musical</th>
                    <th class='text-nowrap text-center'>Provincia</th>
                    <th class='text-nowrap text-center'>Localidad</th>
                    <th class='text-nowrap text-center'>E-Mail</th>
                    <th class='text-nowrap text-center'>Observaciones</th>
                    <th>&nbsp;</th>
                    </thead>";

                    while($fila = mysql_fetch_array($retval))
                    {

                          // Listado normal
                          echo "<tr>";   
                          echo "<td align=center>".$fila['nombreApellido']."</td>";
                          echo "<td align=center>".$fila['sexo']."</td>";
                          echo "<td align=center>".$fila['instrumento']."</td>";
                          echo "<td align=center>".$fila['genre']."</td>";
                          echo "<td align=center>".$fila['provincia']."</td>";
                          echo "<td align=center>".$fila['localidad']."</td>";
                          echo "<td align=center><font size=3 color= \"#003366\"><a href=\"mailto:",$fila['email'],"\">".$fila['email']."</td>";
                          echo "<td align=center>".$fila['observaciones']."</td>";
                          echo "<td class='text-nowrap'>";
                          echo "</td>";
                          echo "</tr>";
                          $i++;
                          $count++;
                    }
      
                        echo "</table>";
                        echo "<br><br><hr>";
                        echo "<div class='row'>
				<div class='col-sm-12'>
				  <div class='panel panel-default'>
				    <div class='panel-heading'>";
			echo '<button type="button" class="btn btn-primary">Cantidad de Usuarios:  ' .$count; echo '</button>';
			echo "</div>
	    
				    </div>
				</div>
			      </div>";
			
			mysql_close($conn);  
  
}

function create_table_images(){


$sql = "CREATE TABLE images (".
      "id INT AUTO_INCREMENT,".
      "file_nam VARCHAR(255),".
      "user_name VARCHAR(60),".
      "upload_on datetime NOT NULL,".
      "status enum('1','0') NOT NULL DEFAULT 1,".
      "PRIMARY KEY (id)); ";

	mysql_select_db('boreal');
	$retval = mysql_query($sql);
	
	if(!$retval)
	{
		mysql_error(); 	
	}
	
	else
	 {	
		echo 'Table create Succesfully\n';
	 }
   
}

function create_table_avatar(){


$sql = "CREATE TABLE avatar (".
      "id INT AUTO_INCREMENT,".
      "file_name VARCHAR(255),".
      "user_name VARCHAR(60),".
      "upload_on datetime NOT NULL,".
      "status enum('1','0') NOT NULL DEFAULT 1,".
      "PRIMARY KEY (id)); ";

	mysql_select_db('boreal');
	$retval = mysql_query($sql);
	
	if(!$retval)
	{
		mysql_error(); 	
	}
	
	else
	 {	
		echo 'Table create Succesfully\n';
	 }
   
}


function create_table_tabs(){


$sql = "CREATE TABLE tabs (".
      "id INT AUTO_INCREMENT,".
      "file_nam VARCHAR(255),".
      "user_name VARCHAR(60),".
      "upload_on datetime NOT NULL,".
      "status enum('1','0') NOT NULL DEFAULT 1,".
      "PRIMARY KEY (id)); ";

	mysql_select_db('boreal');
	$retval = mysql_query($sql);
	
	if(!$retval)
	{
		mysql_error(); 	
	}
	
	else
	 {	
		echo 'Table create Succesfully\n';
	 }
   
}

function create_table_theory(){


$sql = "CREATE TABLE theory (".
      "id INT AUTO_INCREMENT,".
      "file_nam VARCHAR(255),".
      "user_name VARCHAR(60),".
      "upload_on datetime NOT NULL,".
      "status enum('1','0') NOT NULL DEFAULT 1,".
      "PRIMARY KEY (id)); ";

	mysql_select_db('boreal');
	$retval = mysql_query($sql);
	
	if(!$retval)
	{
		mysql_error(); 	
	}
	
	else
	 {	
		echo 'Table create Succesfully\n';
	 }
   
}

function create_table_music(){


$sql = "CREATE TABLE music (".
      "id INT AUTO_INCREMENT,".
      "file_nam VARCHAR(255),".
      "user_name VARCHAR(60),".
      "upload_on datetime NOT NULL,".
      "status enum('1','0') NOT NULL DEFAULT 1,".
      "PRIMARY KEY (id)); ";

	mysql_select_db('boreal');
	$retval = mysql_query($sql);
	
	if(!$retval)
	{
		mysql_error(); 	
	}
	
	else
	 {	
		echo 'Table create Succesfully\n';
	 }
   
}


function upload_form(){
  
  echo "<form action='upload.php' method='post' enctype='multipart/form-data'>
	  <div class='row'>
	    <div class='col-sm-12'>
	      <div class='panel panel-default'>
		<div class='panel-heading'>
		<strong>Seleccione el Archivo a Subir:</strong>
		<br>
	      <input type='file' name='file' class='btn btn-default'><br>
	      <button type='submit' class='btn btn-warning navbar-btn' name='save'><span class='glyphicon glyphicon-cloud-upload'></span> Subir</button>
	      
	    </form>
	   </div>
	    
     </div>
   </div>
</div>";

}




?>