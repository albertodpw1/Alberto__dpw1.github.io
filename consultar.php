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
    <h2 align="center">Consultar producto</h2>
    <br>
    <br> 
    <p>Clave del producto<input type="text" name="clave"></p>
    <br>
    <p align="center"><input type="submit" name="btn" value="Consultar"></p>
    </form>
</body>
</html>
<?php 

    if(isset($_POST['btn'])){
        include("conexion.php/conexBD.php");  
    $clave = $_POST['clave'];
    $leer=mysqli_query($conex,"SELECT * FROM catalogo WHERE clave = $clave");
    echo "DATOS CONSULTADOS";
    echo "<br>";
    while($consulta = mysqli_fetch_array($leer)){      
    if($consulta){   
        echo $consulta['nombre'],"  ";
        echo $consulta['clave'], "  ";
        echo $consulta['precio'], " ";
        echo "<br> ";    
    }  
    }
    }

?>