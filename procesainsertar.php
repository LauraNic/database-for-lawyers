<!--    Laura Gonzalez. 
	Prof. Carlos Corrada. 
	CCOM4027-0U1. 
	May 5, 2020

-->

<!DOCTYPE html>
<html>
<head>
	<title>Insertar</title>
	

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

//echo"<h1>where=$where</h1>";
if($where==0){

	$a=$_POST['licencia'];
//	echo"<h1>a=$a</h1>";
	$b=$_POST['nombre'];
	$c=$_POST['residencia'];
	$d=$_POST['resiano'];
	$e=$_POST['email'];



	$query= "INSERT INTO `CASOLCDO`.`Cliente` (lic_medicina, nom_cliente,residency_lugar,residencia_ano, email_cliente) VALUES($a,'$b','$c','$d','$e') on duplicate key update nom_cliente='$b',email_cliente='$e',residency_lugar='$c',residencia_ano='$d'";

	$retquery = mysqli_query( $conn, $query);

	//Verifies if  the query produces an error

	if(! $retquery) {
		echo'<h1>Error: ' . mysqli_error($conn).'</h1>';

	}
	header("Location:cliente.php");
}


else if($where==1){

	$a=$_POST['oficina'];
	$b=$_POST['numtrib'];
	$c=$_POST['tribunal'];
	$d=$_POST['sala'];
	$e=$_POST['demandante'];
	$f=$_POST['emailabo'];
	$g=$_POST['licencia'];
	$query= "INSERT INTO `CASOLCDO`.`Caso_Historial` (num_oficina, num_tribunal, tribunal,sala,demandante,email_abog_demandante,lic_medicina) VALUES('$a','$b','$c','$d','$e','$f',$g) on duplicate key update num_tribunal='$b', tribunal='$c',sala='$d',demandante='$e',email_abog_demandante='$f',lic_medicina=$g";

	$retquery = mysqli_query( $conn, $query);

	//Verifies if  the query produces an error

	if(! $retquery) {
		echo'<h1>Error: ' . mysqli_error($conn).'</h1>';
	}
	header("Location:casos.php");
}





else if($where==2){

	$a=$_POST['mocion'];

	$b=$_POST['fecha'];
	$c=$_POST['num'];
	$query= "INSERT INTO `CASOLCDO`.`Mocion_Pet` (num_oficina,tipo_moc, fecha) VALUES ('$c','$a','$b') on duplicate key update fecha='$b'";

	$retquery = mysqli_query( $conn, $query);

	//Verifies if  the query produces an error

	if(! $retquery) {
		echo'<h1>Error: ' . mysqli_error($conn).'</h1>';
	}
	header("Location:mociones.php?id=$c");


}




?>
</body>
</html>

