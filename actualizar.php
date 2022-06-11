<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo3.css">
    <style>
     body{
        background: #F5F6CE;

     }
     input[type=submit]{
    border: 0;
    background-color: rgb(174, 255, 0);
    padding: 10px 20px;
}
</style>
    
</head>
<body> 
<form action="actualizar.php" method="post" >
    <h2 align="center">Actualizar producto</h2>
    <br>
    <br>
    <p>Nombre que desea modificar<input type="text" name="viejo"></p>
    <p>Dato nuevo<input type="text" name="nuevo"></p>
    <br>
    <p align="center"><input type="submit" onclick="actualizar()" name= "btn" value="Actualizar"></p>
    </form>
</body>
</html>
<?php 
    if(isset($_POST['btn'])){
        include("conexion.php/conexBD.php");
    
        mysqli_query($conex,"UPDATE catalogo set nombre='$_POST[nuevo]'
        WHERE nombre='$_POST[viejo]'") ;
        
        if($conex){
            echo "Actualización correcta";
        }
        else{ 
            echo "No se realizó la actualización";
        }
}

?>