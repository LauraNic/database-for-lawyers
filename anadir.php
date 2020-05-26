<h1>Anadir</h1>
<php?>

if($GET['where']==0){
echo "
<form action="/action_page.php" method="post">
  <label for="licencia">Licencia</label><br>
  <input type="text" name="licencia"><br>
  <label for="nombre">Nombre</label><br>
  <input type="text" name="nombre"><br>
  <label for="residencia">Residencia Lugar</label><br>
  <input type="text" name="residencia"><br>
  <label for="resiano">Ano Residencia</label><br>
  <input type="number" name="resiano" min="1950" max="2050"><br>
  <label for="email">Email</label><br>
  <input type="email" name="email"><br>
  <input type="submit" value="Submit">
</form> 
";
}

if($GET['where']==1){
echo"
<form action="/action_page.php" method="post">
  <label for="oficina">Numero Oficina</label><br>
  <input type="text" name="oficina"><br>
  <label for="demandante">Demandante</label><br>
  <input type="text" name="demandante"><br>
  <label for="tribunal">Tribunal</label><br>
  <input type="text" name="tribunal"><br>
  <label for="sala">Sala</label><br>
  <input type="number" id="fname" name="sala" min="0" max="800"><br>
  <label for="numtrib">Numero Tribunal</label><br>
  <input type="text" name="numtrib"><br>
  <label for="emailabo">Email abogado</label><br>
  <input type="email" name="emailabo"><br>
  <input type="submit" value="Submit">
</form> 
";

if($GET['where'==2){
echo "
<form action="/action_page.php" method="post">
  <label for="mocion">Tipo Mocion</label><br>
  <input type="text" name="mocion"><br>
  <label for="fecha">Fecha</label><br>
  <input type="date" name="fecha"><br>
  <input type="submit" value="Submit">
</form> 
";
}

<?>

<h1>made it</h1>