<?php 
/* Se incluyen las variables que contienen los datos de la conexión a la base de datos,
como la dirección del servidor, el nombre de usuario, la contraseña y el nombre de la base
datos creada en phpmyadmin, posteriormente se realiza la conexión mediante mysqli_connect
y las variables creadas. */

$hostname = "localhost:3307";
$usuariodb = "root";
$password = "";
$dbname = "sitioweb_dpw1";

$conex=mysqli_connect($hostname,$usuariodb,$password,$dbname);

?>