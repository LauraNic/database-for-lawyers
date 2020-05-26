<!--    Laura 
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
       <a href=insertar.php?where=1&edita=0>Insertar</a>
	 <a href=main.php>Main</a>
   	

<table>
	  <tr>
	    <th>Numero en Oficina</th>  
	    <th>Tribunal</th>
	    <th>Sala</th>
	    <th>Numero en Tribunal</th>
	    <th>Demandante</th>
	    <th>Email Abogado Demandante</th>
	    <th>Licencia Medica del Cliente</th>	
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

$query="SELECT * FROM Caso_Historial ";

$retquery = mysqli_query($conn, $query);

//Verifies if  the query produces an error

if(!$retquery) {
     die('Error'.mysqli_error($conn));
}
else{
//Loops for the necessary tuples

while($row = mysqli_fetch_assoc($retquery)) {

//Prints out html needed for the table
 
$a=$row["num_oficina"];
$b=$row["num_tribunal"];
$c=$row["tribunal"];
$d=$row["sala"];
$e=$row["demandante"];
$f=$row["email_abog_demandante"];
$g=$row["lic_medicina"];

echo "<tr>";
echo  "<td>$a</td>" ;
echo  "<td>$c</td>" ;
echo  "<td>$d</td>" ;
echo  "<td>$b</td>" ;
echo  "<td>$e</td>" ;
echo  "<td>$f</td>" ;
echo  "<td>$g</td>" ;
echo "<td><a href=insertar.php?where=1&edita=1&id=$a>Editar</a> ";
echo "<a href=procesaeliminar.php?where=1&id=$a>Eliminar</a> ";  
echo "<a href=mociones.php?id=$a>Mociones</a>";
echo  "</td></tr>"; 

}
	
}



?>

		
	</table>
</body>
</html>
