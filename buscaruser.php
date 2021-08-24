<head>

<title>Informe Vehiculo</title>
<meta charset="UTF-8">
<link href="Style/stylo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="Style/CSS/style.css">

</head>
<?php 
include 'conexion.php';
?>
<h3 align="center">Vehiculo</h3>

<form class="frm" method="POST" action="">
<?php 
$con = mysqli_connect("localhost", "root", "", "acme");
$sql = "SELECT car.placa, car.marca, car.conductor, user.primern, user.segundon, user.apellidos FROM car INNER JOIN user ON car.idcar = user.iduser ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  
echo "<table class='tbl2'><tr><th>Placa</th><th>Marca</th><th>Conductor</th><th>Propietario=></th><th>Primer nombre</th><th>Segundo nombre</th><th>Apellidos</th></tr>";  

  while($row = mysqli_fetch_assoc($result)) {

    echo "<tr><td>".$row["placa"]."</td>"."<td>".$row["marca"]."<td>".$row["conductor"]."</td><td>--------</td></td><td>".$row["primern"]."</td>"."<td>".$row["segundon"]."<td>".$row["apellidos"]."</td></td>
    <td><a href='delete.php'>delete</a></td>
    <td><a href='edit.php'>edit</a></td></tr>";
    
  }
} 

?>
<br><br><br><br><a class="" href="index0.php">Atras</a>
</form>