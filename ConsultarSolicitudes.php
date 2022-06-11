<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fechaborr.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="assets_estilos/style.css">
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
   
<br>
<h2>Fecha de hoy:</h2><div id="mostrarFecha"><script type="text/javascript">mostrarFecha(); </script></div>

<br>
  <h2 align="center">CONSULTAR SOLICITUDES</h2>
  <br>
  <br>
  <form  method="post" >
    <h2 align="center">Pulse para consultar las solicitudes de los usuarios</h2>
    <br>
    <p align="center"><input type="submit" name="btn" value="Consultar solicitudes"><h2></h2></p>
    </form>
</body>
</html>
<?php 
    if(isset($_POST['btn'])){

        date_default_timezone_set('America/Mexico_City');
        $fecha = date("Y-m-d");
 include("conexion.php/conexBD.php");  
    $consulta2= "SELECT * FROM cotizacion";
    $result= mysqli_query($conex,$consulta2);
    if($result == true){
        while($row = $result->fetch_array()){
            $nombre = $row['nombre'];
            $edad = $row['edad'];
            $correo = $row['correo'];
            $descripcion = $row['descripcion'];
            $fecha = $row['fecha'];

            ?>
            <div>
                <h2><?php echo $nombre; ?></h2>
                <div>
                <p>
                <b>Edad: </b><?php echo $edad; ?><br>
                <b>Correo: </b><?php echo $correo; ?><br>
                <b>Descripcion: </b><?php echo $descripcion; ?><br>
                <b>Fecha: </b><?php echo $fecha; ?><br>           
                <br>
                </p>
                </div>
            </div>
<?php          
        }      
    }
}
?>