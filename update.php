<?php

include("conexion.php");
$con=conectar();

    
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha=date('d m'); 

$id=$_POST['id'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$producto=$_POST['producto'];

$sql="UPDATE listamercaderia SET  producto='$producto',descripcion='$descripcion',precio='$precio',fecha='$fecha' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
         echo'<script type="text/javascript">window.location.href="index.php";</script>';
        // Header("Location:index.php");
    }
?>