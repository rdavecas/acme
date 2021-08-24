<?php 
// session_start();
include 'conexion.php';
$mysqli = new mysqli('localhost', 'root', '', 'acme');
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="Style/CSS/style.css">
<link href="Style/stylo.css" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">

<title>Registro de vehiculo </title>

</head>

<body>

    <h1 align="center">Registro de vehiculo</h1>

    <form class="frm" method="POST" action="registroitem.php" >
    <input class="intp" type="text"  placeholder="Placa del vehiculo" name="plca"  autofocus required="" value=''/><br/><br/>
    <input class="intp" type="text"  placeholder="Color del vehiculo" name="color"  autofocus required="" value=''/><br/><br/>
    <input class="intp" type="text"  placeholder="Marca del vehiculo" name="mark"  autofocus required="" value=''/><br/><br/>
    <p>tipo de vehiculo</p>
    <select name="optcar">
    <option value="0">Seleccione:</option>
    <?php $query = $mysqli -> query ("SELECT * FROM tipcar");
               
while ($valores = mysqli_fetch_array($query)) {
                        
  echo '<option value="'.$valores[idtipo].'">'.$valores[tipo].'</option>';
}
   ?> 
</select><br><br><br>
    <input class="intp" type="text"  placeholder="Conductor" name="driv"  autofocus required="" value=''/><br/><br/>
    <p>Propietario</p>
    <a>Numero de Cedula</a>
    <select name="idprop">
    <option value="0">Seleccione:</option>
    <?php $query0 = $mysqli -> query ("SELECT * FROM user");
               
while ($valores0 = mysqli_fetch_array($query0)) {
                        
  echo '<option value="'.$valores0[iduser].'">'.$valores0[cedula].'</option>';
}
   ?> 
</select><br><br><br>
    
   
    
    <button class="submit" name="login" type="submit">Registrar</button>
    <br><br><br><br><a class="" href="index0.php">Atras</a>
</form>


</body>

</html> 