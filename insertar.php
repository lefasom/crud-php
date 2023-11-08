<?php
include("conexion.php");
$con=conectar();

    
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha=date('d m'); 

$producto="";
$descripcion="";
$precio=0;


$sql="INSERT INTO `listamercaderia`(`id`, `producto`, `descripcion`, `precio`, `fecha`) VALUES (null,'$producto','$descripcion','$precio','$fecha')";
$query=mysqli_query($con,$sql);

if($query){
     echo'<script type="text/javascript">window.location.href="index.php";</script>';
    // Header("Location:index.php");
    
}else {
echo "NO F";

}
?>