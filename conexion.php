<?php
$host="localhost";
$user="root";
$pw="";
$db="acme";


$x= mysqli_connect($host,$user,$pw,$db);
    
//seleccionar base de datos si hace fatla
    if ($x){
    $db0=mysqli_select_db($x,$db);
    echo 'ok <br>';
    }
    
    
    
    if ($x){
    
    echo 'on';    
    
}
 else {
    echo 'no funciona';
}
?>