<!--    Laura Gonzalez. 
	Prof. Carlos Corrada. 
	CCOM4027-0U1. 
	May 5, 2020

-->

<!DOCTYPE html>
<html>
<head>
	<title>Casos</title>
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
	<h2>Informacion sobre casos</h2>
	echo "<a href=anadir.php?where=1>Anadir Mocion</a> ";
 	<table>
	  <tr>
	    <th>Numero en Oficina</th>  
	    <th>Tribunal</th>
	    <th>Sala</th>
	    <th>Numero en Tribunal</th>
	    <th>Demandante</th>
	    <th>Email Abogado Demandante</th>
	    <th>Licencia</th>	

	  </tr>





<?php

/*

$server = "localhost";
$user = "laura.gonzalez19";
$passwd = "801172841";
$db = "ccom4027B92";

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

$query="SELECT * FROM Caso_Historial ";

$retquery = mysqli_query( $conn, $query);

//Verifies if  the query produces an error

if(!$retquery) {
	die('Error ocasionado por el query: ' . mysqli_error());
}

//Loops for the necessary tuples

while($row = mysqli_fetch_assoc($retquery)) {

//Prints out html needed for the table
  echo "<tr>";
  echo  "<td>$row['num_oficina']</td>" ;
  echo  "<td>$row['num_tribunal']</td>" ;
  echo  "<td>$row['tribunal']</td>" ;
  echo  "<td>$row['sala']</td>" ;
  echo  "<td>$row['demandante']</td>" ;
  echo  "<td>$row['email_abog_demandante']</td>" ;
  echo  "<td>$row['licencia_medicina']</td>" ;
  echo  "</tr>"; 

}
	




?>

		
	</table>
</body>
</html>