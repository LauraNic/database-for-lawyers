<!--    Laura
-->

<!DOCTYPE html>
<html>
<head>
	<title>Eliminacion</title>
	

</head>
<body>
	
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

$where=$_GET['where'];
$id=$_GET['id'];
if($where==0){
	//$query= "DELETE FROM Cliente WHERE lic_medicina=$id";
	$query= "DELETE FROM `CASOLCDO`.`Cliente` WHERE `Cliente`.`lic_medicina`= $id"; 
	//echo"<h1>here $query</h1>";
	$retquery = mysqli_query( $conn, $query);
	if(! $retquery) {
		echo '<h1>Error: ' . mysqli_error($conn).'</h1>';
	}
	header("Location:cliente.php");
}

else if($where==1){
       $query="DELETE FROM `CASOLCDO`.`Caso_Historial` WHERE `Caso_Historial`.`num_oficina` ='$id'";
	$retquery = mysqli_query( $conn, $query);
	if(! $retquery) {
		echo 'Error: ' . mysqli_error($conn);
	}
	header("Location:casos.php");
}

else if($where==2){
	$query= "DELETE FROM `CASOLCDO`.`Mocion_Pet` WHERE `Mocion_Pet`.`tipo_moc`='$id'";
	$retquery = mysqli_query( $conn, $query);
	if(! $retquery) {
		echo 'Error: ' . mysqli_error($conn);
	}
	header("Location:casos.php");
	
}
?>
</body>
</html>

