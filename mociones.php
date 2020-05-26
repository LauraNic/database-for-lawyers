<!--    Laura Gonzalez. 
	Prof. Carlos Corrada. 
	CCOM4027-0U1. 
	May 5, 2020

-->

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
	echo "<a href=anadir.php?where=2>Anadir Mocion</a> ";
 	<table>
	  <tr>
	    <th>Tipo de mocion</th>
	    <th>Fecha</th>
	    <th>Operaciones</th>
	  </tr>





<?php

/*

//header('Content-Type: text/html; charset="ISO-8859-1");

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

//Saves the query needed

$query="SELECT * FROM Clientes ";

$retquery = mysqli_query( $conn, $query);

//Verifies if  the query produces an error

if(! $retquery) {
	die('Error ocasionado por el query: ' . mysqli_error());
}

//Loops for the necessary tuples

//while($row = mysqli_fetch_assoc($retquery)) {

$f= $row['nombres'];

//Prints out html needed for the table
 
 */

   

  echo "<tr>";
  echo  "<td>A</td>" ;
  echo  "<td>B</td>" ;
  echo  "<td>" ;
  echo "<a href=google.com>Editar</a> ";
  echo "<a href=google.com>Eliminar</a> ";
//  echo "<a href=editar.php?edita=1&eid'.$row[''].'&did'$row['did']>."Editar</a> ";
//  echo "<a href=eliminar.php?eid'.$row['eid'].'&did'$row['did']>."Eliminar</a> ";
  echo  "<td></td>" ;
  echo  "</tr>"; 
//}
	




?>

		
	</table>
</body>
</html>