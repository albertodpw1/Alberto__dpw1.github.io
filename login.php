<?php

include("conexBD.php");

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];

$campos=array();
if($nombre=="" || strlen($nombre) < 3 ||strlen($nombre) > 20){
    echo "Error";

array_push($campos, "El nombre debe tener más de 3 letras y menos de 20");
}

if($usuario =="" ||strlen($usuario) < 3 ||strlen($usuario) > 8){
    array_push($campos,"El usuario debe tener más de 3 letras y menos de 8");
}
if($password =="" ||strlen($password) < 3 ||strlen($password) > 12){
    array_push($campos,"La contraseña debe tener más de 3 letras y menos de 12");
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
                echo " | Nombre |","   \t  Usuario |" ,  "   \t   Contraseña |","<br/>";
                echo "</div>";

                $cantfila=3;
                $cantcolumn=1;
                echo "<table border=2>";
                for($fila=1;$fila<=$cantfila;$fila++){
                }
                echo  "<tr>";
                for($col=1;$col<=$cantcolumn;$col++){
            
                }
                echo "<td>|$nombre   |  $usuario | $password |</td>  ";
            }
                echo "<tr>";
            
            echo "</table>";
    }
    echo "</div>";


        $consulta = "INSERT INTO acceso_usuarios(nombre, usuario, contrasena) 
        VALUES ('$nombre','$usuario','$password')";
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
?>
