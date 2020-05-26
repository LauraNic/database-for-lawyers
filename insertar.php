<?php
echo"<h1
>".($_GET['edita']?"Editar":"Insertar")."</h1>";
echo"<h3>".($_GET['edita']?"":"* No deben de haber repetidos")."</h3>";
$edita=0;
$server = "localhost";
$user = "CASOLCDO";
$passwd = "fiY88T44157E1Sie";
$db = "CASOLCDO";

//Opens a new connection to the MySQL server

$conn= mysqli_connect($server,$user, $passwd, $db);

//Verifies if the connection produces and error
if (mysqli_connect_errno()) {
	printf("Error al conectarse con la base de datos: %s\n", mysqli_connect_error());
	exit();
}

//Performs a query against the database. Necesary for encoding

mysqli_query($conn, "SET NAMES 'utf8'");



if($_GET['where']==="0"){


 if($_GET['edita']==1)
    {
    		$edita = mysqli_real_escape_string($conn, $_GET['edita']);
		$id= mysqli_real_escape_string($conn, $_GET['id']);
		$query="SELECT * from Cliente where lic_medicina=$id";
		$result = mysqli_query($conn,$query);
		$datos_usuario=mysqli_fetch_array($result);
}

echo '<form action="procesainsertar.php?where=0" method="post">
  <label for="licencia">Licencia *</label><br>
  <input type="text" name="licencia" '.($edita? 'value='. $datos_usuario['lic_medicina']  :  '   ')  .' required><br>
  <label for="nombre">Nombre</label><br>
  <input type="text" name="nombre" '.($edita? 'value="'. $datos_usuario['nom_cliente'].'"'  :  '   ')  .' required><br>
  <label for="residencia">Residencia Lugar</label><br>
  <input type="text" name="residencia"'.($edita? 'value="'. $datos_usuario['residency_lugar'].'"'  :  '   ')  .' required><br>
  <label for="resiano">Ano Residencia</label><br>
  <input type="number" name="resiano" min="1950" max="2050" '.($edita? 'value='. $datos_usuario['residencia_ano']  :  '   ')  .' required><br>
  <label for="email">Email</label><br>
  <input type="email" name="email"'.($edita? 'value='. $datos_usuario['email_cliente']  :  '   ')  .' required><br>
  <input type="submit" value="Submit">
</form>
';
}

if($_GET['where']==="1"){

 if($_GET['edita']==1)
    {
   		$edita = mysqli_real_escape_string($conn, $_GET['edita']);
		$id = mysqli_real_escape_string($conn, $_GET['id']);
 	        $query='SELECT * from Caso_Historial WHERE num_oficina="'.$id .'"';
		$result = mysqli_query($conn,$query);
		$datos_usuario=mysqli_fetch_array($result, MYSQLI_ASSOC);
		//$datos_usuario=mysqli_fetch_assoc($result);    
}

echo'
<form action="procesainsertar.php?where=1" method="post">
  <label for="oficina">Numero Oficina*</label><br>
  <input type="text" name="oficina" '.($edita? 'value='. $datos_usuario['num_oficina']  :  '   ')  .' required><br>
  <label for="demandante">Demandante</label><br>
  <input type="text" name="demandante" '.($edita? 'value="'. $datos_usuario['demandante'].'"'  :  '   ')  .' required><br>
  <label for="tribunal">Tribunal</label><br>
  <input type="text" name="tribunal" '.($edita? 'value="'. $datos_usuario['tribunal'].'"'  :  '   ')  .' required><br>
  <label for="sala">Sala</label><br>
  <input type="number" name="sala" min="0" max="800" '.($edita? 'value='. $datos_usuario['sala']  :  '   ')  .' required><br>
  <label for="numtrib">Numero Tribunal</label><br>
  <input type="text" name="numtrib" '.($edita? 'value='. $datos_usuario['num_tribunal']  :  '   ')  .' required><br>
  <label for="emailabo">Email abogado</label><br>
  <input type="email" name="emailabo" '.($edita? 'value='. $datos_usuario['email_abog_demandante']  :  '   ')  .' required><br>
  <label for="licencia">Licencia Medica de Cliente</label><br> 
 <input type="number" name="licencia" '.($edita? 'value='. $datos_usuario['lic_medicina']  :  '   ')  .' required><br>  
  <input type="submit" value="Submit">
</form>
';
}
if($_GET['where']==="2"){

 if($_GET['edita']==1)
    {
    		$edita = mysqli_real_escape_string($conn, $_GET['edita']);
  	$id = mysqli_real_escape_string($conn, $_GET['id']);
		$idd = mysqli_real_escape_string($conn, $_GET['idd']);
	$query='SELECT * from Mocion_Pet WHERE num_oficina="'.$idd.'"and '. 'tipo_moc="'.$id .'"';
	$result = mysqli_query($conn,$query);
//echo"query: ".$query;	
$datos_usuario=mysqli_fetch_array($result, MYSQLI_ASSOC);
    }

echo '
<form action="procesainsertar.php?where=2" method="post">
  <label for="mocion">Tipo Mocion*</label><br>
  <input type="text" name="mocion" '.($edita? 'value="'. $datos_usuario['tipo_moc'].'"'  :  '   ')  .' required><br>
  <label for="fecha">Fecha</label><br>
  <input type="date" name="fecha" '.($edita? 'value='. $datos_usuario['fecha']  :  '   ')  .' required><br>
 <label for="num">Numero de Archivo en Oficina</label><br>
  <input type="text" name="num" '.($edita? 'value="'. $datos_usuario['num_oficina'].'"'  :  '   ')  .' r
equired><br>
  <input type="submit" value="Submit">
</form>
';
}
