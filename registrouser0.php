<?php 
include 'conexion.php';
$con = mysqli_connect("localhost", "root", "", "acme");


if (isset($_POST['cc']) && !empty($_POST['cc']) &&
    isset($_POST['primern']) && !empty($_POST['primern'])&& 
    isset($_POST['segundon']) && !empty($_POST['segundon']) &&
    isset($_POST['apll']) && !empty($_POST['apll'])&&
    isset($_POST['dir']) && !empty($_POST['dir']) &&
    isset($_POST['tel']) && !empty($_POST['tel'])&&
    isset($_POST['optcity']) && !empty($_POST['optcity'])
   )   
     {

        if (mysqli_query($con, "INSERT INTO user (iduser,cedula,primern,segundon,apellidos,direccion,telefono,idcity) 
        VALUES ('','".$_POST[cc]."','".$_POST[primern]."','".$_POST[segundon]."','".$_POST[apll]."','".$_POST[dir]."','".$_POST[tel]."','".$_POST['optcity']."')") === TRUE) {
            printf("Se creó con éxtio.\n");
        


    //'".$_POST["name"]."'
 
        echo '<script>alert("Datos insertados")</script>';
	echo'<script language="javascript">window.location="index0.php"</script>';

         }  }
    else {
             //echo '<br> Verificar que los campos coincidan <br>';
        echo '<script>alert("Verificar  los campos")</script>';
	echo'<script language="javascript">window.location="registrar0.php"</script>';
    
    }     
    
?>