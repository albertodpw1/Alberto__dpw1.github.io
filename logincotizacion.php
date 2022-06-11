
   <!DOCTYPE html>
   <html lang="es">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script type="text/javascript" src="fechaborr.js"></script>
       <title>Document</title>
   </head>
   <body>
   <div id="mostrarFecha"><script type="text/javascript">mostrarFecha();</script></div>
   </body>
   </html>
   <script>

    </script>
<?php
include("conexion.php/conexBD.php");


$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

try{
    $campos=array();
if($nombre=="" || strlen($nombre) < 3 ||strlen($nombre) > 20){
    echo "Error";

array_push($campos, "El nombre debe tener más de 3 letras y menos de 20");
}
if($edad =="" ||strlen($edad) < 1 ||strlen($edad) > 2){
    array_push($campos,"Edad = Debe ser mínimo de un dígito y máximo de dos dígitos");
}
else if(strlen($edad<18) || strlen($edad>60) ){
    array_push($campos,"Edad = Debe ser mínimo una edad de 18 años (mayores de edad)
    y máximo de 60 años");
}
if($correo == "" || strpos($correo,"@")=== false){
    array_push($campos,"Ingresa un correo electrónico válido");
}

if(count($campos) > 0){
    echo "<div class='error'>";
    for($i=0;$i < count($campos);$i++){
        echo "<li>".$campos[$i]."</i>";
    }
}

else{
    echo "<table border=3>";
    echo "<div class='correcto'>
            datos correctos";
            echo "<h2>Información recibida desde PHP</h2>";
            echo " | Nombre |","    Edad |" , "    Correo |", " Fecha  |"," Descripcion |","<br/>";
            echo "</div>";
            $cantfila=4;
            $cantcolumn=1;
            echo "<table border=2>";
            for($fila=1;$fila<=$cantfila;$fila++){
            }
            echo  "<tr>";
            for($col=1;$col<=$cantcolumn;$col++){
        
            }
            echo "<td>|$nombre   |  $edad | $correo | $fecha |  $descripcion </td>  ";
        }
            echo "<tr>";
        echo "</table>";
echo "</div>";
$consulta2="INSERT INTO cotizacion (fecha) VALUES ('$fecha')";

$consulta = "INSERT INTO cotizacion(nombre, edad, correo, descripcion) 
VALUES ('$nombre','$edad','$correo','$descripcion')";
  $resultado = mysqli_query($conex, $consulta);
  if($resultado){
    echo "<br>";
    echo "<br>";
echo "Datos guardados en la base de datos";
}
else{
    echo "<br>";
    echo "<br>";
echo "Error en la conexión";
}

}
catch(Exception $ex){
echo "Excepción ocurrida:: ", $ex->getMessage()."</br>";
}

}

?>