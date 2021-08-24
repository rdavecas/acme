<?php 
include 'conexion.php';
$con = mysqli_connect("localhost", "root", "", "acme");


if (isset($_POST['plca']) && !empty($_POST['plca']) &&
    isset($_POST['color']) && !empty($_POST['color'])&& 
    isset($_POST['mark']) && !empty($_POST['mark']) &&
    isset($_POST['optcar']) && !empty($_POST['optcar'])&&
    isset($_POST['driv']) && !empty($_POST['driv'])&&
    isset($_POST['idprop']) && !empty($_POST['idprop'])
   )   
     {

        if (mysqli_query($con, "INSERT INTO car (idcar,placa,color,marca,idtipo,conductor,iduser) 
        VALUES ('','".$_POST[plca]."','".$_POST[color]."','".$_POST[mark]."','".$_POST['optcar']."','".$_POST[driv]."','".$_POST['idprop']."')") === TRUE) {
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