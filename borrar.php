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
<form  method="post" >
    <h2 align="center">Borrar producto</h2>
    <br>
    <br>
    <p>Clave<input type="text" name="clave"></p>
    <p>Nombre<input type="text" name="nombre"></p>
    <p>Precio<input type="text" name="precio"></p>
    <br>
    <p align="center"><input type="submit" name="btn" value="Borrar"></p>
    </form>
</body>
</html>
<?php 
    if(isset($_POST['btn'])){
        include("conexion.php/conexBD.php");  
        mysqli_query($conex,"DELETE FROM catalogo WHERE nombre= '$_POST[nombre]'");
        if($conex){
            echo "Dato eliminado";    
        }
        else{    
            echo "No se pudo eliminar el dato";
        }
    }    



?>