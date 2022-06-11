
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
<form method="post" >
    <h2 align="center">Crear producto</h2>
    <br>
    <br>
    <p>Clave<input type="text" name="clave"></p>
    <p>Nombre<input type="text" name="nombre"></p>
    <p>Precio<input type="text" name="precio"></p>
    <br>
    <p align="center"><input type="submit" name="btn"  value="Crear"></p>
    </form>
</body>
</html>
<?php


if(isset($_POST['btn'])){

    include("conexion.php/conexBD.php");
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $consulta = "INSERT INTO catalogo(clave, nombre, precio) 
    VALUES ('$clave','$nombre','$precio')";
     $resultado = mysqli_query($conex, $consulta);
    if($resultado){
    echo "<br>";
    echo "<br>";
    echo "Datos guardados en la base de datos";
    echo "<br>";
    }
    else{
    echo "<br>";
    echo "<br>";
    echo "Error en la conexión";
    echo "<br>";
    }
}
else{
        echo "Ocurrió un error";
}

?>