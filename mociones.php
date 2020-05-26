<!--    Laura Gonzalez. -->

<!DOCTYPE html>
<html>
<head>
	<title>Mociones</title>
	<style>
		table {
		  font-family: times new roman;
		  border-collapse: collapse;
		  width:70%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: middle;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>

</head>
<body>
	<h2>Informacion sobre mociones</h2>
     <a href=insertar.php?where=2&edita=0>Insertar</a> 
  <a href=main.php>Main</a>
         <a href=casos.php>Casos</a>
<table>
	  <tr>
	    <th>Tipo de mocion</th>
	    <th>Fecha</th>
	    <th>Operaciones</th>
	  </tr>





<?php

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

//Saves the query 
	$query='SELECT * FROM Mocion_Pet WHERE num_oficina= "'.$_GET["id"].'"';

	$retquery = mysqli_query( $conn, $query);

//Verifies if  the query produces an error

	if(! $retquery) {
		die('No hay mociones hasta ahora: ' . mysqli_error($conn));
	}

//Loops for the necessary tuples

	while($row = mysqli_fetch_assoc($retquery)) {

//Prints out html needed for the table
 
 
	$a=$row["tipo_moc"];
	$b=$row["fecha"];
	$c=$row["num_oficina"];

  echo "<tr>";
  echo  "<td>$a</td>" ;
  echo  "<td>$b</td>" ;
  echo  "<td>" ;
  $url=urlencode($a);
  echo "<a href=insertar.php?where=2&edita=1&id=$url&idd=$c>Editar</a> ";
  echo "<a href=procesaeliminar.php?where=2&id=$url> Eliminar</a> ";
  echo  "<td></td>" ;
  echo  "</tr>"; 
	}



?>
</table>
</body>
</html>
