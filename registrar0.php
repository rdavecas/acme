<?php 
// session_start();
include 'conexion.php';
$mysqli = new mysqli('localhost', 'root', '', 'acme');
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<title>Registro de propietario</title>
<link rel="stylesheet" type="text/css" href="Style/CSS/style.css">
<link href="Style/stylo.css" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">


</head>

<body>

    <br><br><br><h1 align="center">Registro de propietario</h1>
    
    

    <form class="frm" method="POST" action="registrouser0.php" >
    <input class="intp" type="number"  placeholder="Numero de cedula" name="cc"  autofocus required="" value=''/><br/><br/>
    <input class="intp" type="text"  placeholder="Primer nombre" name="primern"  autofocus required="" value=''/><br/><br/>
    <input class="intp" type="text"  placeholder="Segundo nombre" name="segundon"  autofocus required="" value=''/><br/><br/>
    <input class="intp" type="text"  placeholder="Apellidos" name="apll"  autofocus required="" value=''/><br/><br/>
    <input class="intp" type="text"  placeholder="Direccion" name="dir"  autofocus required="" value=''/><br/><br/>
    <input class="intp" type="text"  placeholder="Telefono" name="tel"  autofocus required="" value=''/><br/><br/>
    <p>ciudad</p>
    <select name="optcity">
    <option value="0">Seleccione:</option>
    <?php $query = $mysqli -> query ("SELECT * FROM ciudades");
               
while ($valores = mysqli_fetch_array($query)) {
                        
  echo '<option value="'.$valores[idcity].'">'.$valores[nombre].'</option>';
}
   ?> 
</select>   
    
    <button class="submit" name="login" type="submit">Registrar</button>
    <br><br><br><br><a class="" href="index0.php">Atras</a>
   
        
</form>

</body>

</html> 