<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM listamercaderia order by producto" ;
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PRECIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        
    </head>
    <body>    

        <style type="text/css">
            .p{
                padding: 7px;
                text-align: center;
                width: 80%;
            
             background: #eeee;
            }

            .info{
                display: flex;
                justify-content: center;
            }
           
        </style>

            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                         
                                <form action="insertar.php" method="POST">

                                   <!--  <input type="text" class="form-control mb-3" name="id" placeholder="cod"> -->
                                    <input style="display: none;" type="text" class="form-control mb-3" name="producto" placeholder="producto">
                                    <input style="display: none;" type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion">
                                    <input style="display: none;" type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    
                                    <input style="margin-bottom: 13px;" type="submit" class="btn btn-primary" value="Nuevo">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr style="background:#eeee;">
                                       <!--  <th>Cod</th> -->
                                        <th style="background:#eeee;">Producto</th>
                                        <th style="background:#eeee;">Descripcion</th>
                                        <th style="background:#eeee;">Precio</th>
                                        <th style="background:#eeee;"></th>
                                        <th style="background:#eeee;"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                             
                                              
                                                <?php

                                                date_default_timezone_set("America/Argentina/Buenos_Aires");
                                                 $fecha=date('d m'); 
                                                      $antes=date('d');

                                                 $fecha2=($antes-1)." ".date('m'); 
                                                    if ($row['fecha']==$fecha ||$row['fecha']==$fecha2) {
                                                        ?>
                                    
                                                    <th style="color: #E83A14;border-color:#dddddd ;"><?php  echo $row['producto']?></th>
                                                    <th style="text-align: center   ;color: #E83A14;border-color:#dddddd ;"><?php  echo $row['descripcion']?></th>
                                                    <th style="text-align: center   ;color: #E83A14;border-color:#dddddd ;">$ <?php  echo $row['precio']?></th> 


                                                        <?php 
                                                    }else{
                                                       ?>
                                                  <th ><?php  echo $row['producto']?></th>
                                                    <th style="   text-align: center  ;"><?php  echo $row['descripcion']?></th>
                                                    <th style="   text-align: center  ;">$ <?php  echo $row['precio']?></th>

                                                       <?php  

                                                    } 

                                                    ?>



                                                 

                                                                           

                                            
                                                <th>
                                                    <a  href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Editar</a>
                                                </th>
                                                <th><a  href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                                                            <?php 
                                            }
                                        ?>

                                </tbody>
                                <style type="text/css"> 

                                    th a{
                                            

                                       

                                    }
                                </style>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
   
</html>