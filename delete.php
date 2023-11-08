<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM listamercaderia WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
         echo'<script type="text/javascript">window.location.href="index.php";</script>';
        // Header("Location:index.php");
    }
?>
