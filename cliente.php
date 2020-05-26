<!--Laura Gonzalez. 
	Prof. Carlos Corrada. 
	CCOM4027-0U1. 
	May 5, 2020

-->

<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
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
	<h2>Informacion sobre clientes</h2>
	<h4>Para eliminar cliente, es necesario eliminar primero los casos en los que participan por medidas de seguridad.</h4> 
      <a href=insertar.php?where=0&edita=0>Anadir</a> 
       <a href=main.php>Main</a>
 
 	<table>
	  <tr>
	    <th>Licencia</th>  
	    <th>Nombre</th>
	    <th>Residencia en MD</th>
	    <th>Año de Residencia</th>
	    <th>Email</th>
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

//Saves the query needed

$query="SELECT * FROM Cliente";

$retquery = mysqli_query( $conn, $query);

//Verifies if  the query produces an error

if(!$retquery) {
	die('No hay nada en Cliente');
	$no=1;
}

//Loops for the necessary tuples
else{
while($row = mysqli_fetch_assoc($retquery)) {

//Prints out html needed for the table
 
 

   

$a=$row["lic_medicina"];
$b=$row["nom_cliente"];
$c=$row["residency_lugar"];
$d=$row["residencia_ano"];
$e=$row["email_cliente"];



echo "<tr>";
echo  "<td>$a</td>" ;
echo  "<td>$b</td>" ;
echo  "<td>$c</td>" ;
echo  "<td>$d</td>" ;
echo  "<td>$e</td>" ; 
echo "<td><a href=insertar.php?where=0&id=$a&edita=1>Editar</a> ";
echo "<a href=procesaeliminar.php?where=0&id=$a>Eliminar</a> ";
echo  "</td></tr>"; 

}

}
?>

		
	</table>
</body>
</html>
