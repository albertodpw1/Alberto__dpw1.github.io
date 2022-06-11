<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo5.css">
    <link rel="stylesheet" href="galeria.css">

</head>
<style>

    a{
        display: block;
        background-color: brown;
        border-radius: 30px;
        padding: 10px 40px;
        margin: 100px 50px;
        text-decoration: none;
    }
</style>

<body onload="on_load()" >
<script src="script.js"></script>
    <br>
    <br>
    <h2 align="center">Arte Huichol</h2>
    <br>
    <div class="slider">
    <ul>
    <li><img src="assets_imagenes/pro1.jpg" eight="200" width="200" alt=""></li>
    <li><img src="assets_imagenes/pro2.jpg" eight="400" width="400" alt=""></li>
    <li><img src="assets_imagenes/pro3.jpg" eight="400" width="400" alt=""></li>
    <li><img src="assets_imagenes/pro4.jpg" eight="400" width="400" alt=""></li>
    <li><img src="assets_imagenes/pro5.jpg" eight="400" width="400" alt=""></li>
    </ul>

</div>
    <div id="tablacatalogo">
        <h2 align="center">CATÁLOGO DE PRODUCTOS</h2>

            <ul>
                <li>
                    <!--implementación de tabla para los atributos del producto-->
                
                    <table id="produc" border="1">           
                            <tr>
                                <th>
                                    Clave del producto
                                </th>
                                <th>Nombre del producto</th>
                                <th>Precio</th>
                
                            </tr>		
                                <td>123</td>
                                <td>Bolso</td>
                                <td>1500.00 MXN</td>
                            <tr>
                                <td>456</td>
                                <td>Pulsera</td>
                                <td>269.00 MXN</td>			
                            </tr>		
                                <td>478</td>
                                <td>Llavero</td>
                                <td>500.00 MXN</td>			
                            </tr>
                                
                                <td>187</td>
                                <td>Anillo</td>
                                <td>150.00 MXN</td>			
                            </tr>
                                    
                                <td>612</td>
                                <td>Aretes</td>
                                <td>350.00 MXN</td>			
                            </tr>

                        </table> 

                </li>

            </ul>
<br>
<a align="center" href="agregarproducto.php"><h2>Crear registro de producto</h2></a>
<a align="center" href="borrar.php"><h2>Borrar producto</h2></a>
<a align="center" href="consultar.php"><h2>Consultar productos</h2> </a>
<a align="center" href="actualizar.php"><h2>Actualizar productos</h2>  </a>


<a align="center" id="gal" href="galeria.html"  ><h2>Galería de fotos</h2></a>

        <?php 
        echo"";
        $nombre1="Coca cola 600 ml";
        $descripcion1="Refresco gasificado";
        $present1="Envase con 600 ml";
        $precio1="$20";
        $cant1="235";
        
        $nombre2="Jabon zote";
        $descripcion2="Jabón de pastilla";
        $present2="Pieza";
        $precio2="$15";
        $cant2="896";
      echo("<br>");
      echo("<br>");

   
            echo "<h2 >PRODUCTOS OTROS</h2>";
        echo "<table border=2>";
        echo "<tr>";
        echo "<td rowspan=3></td>";
        echo "<td>Nombre</td><td>Descripción</td><td>Presentación</td><td>Precio</td><td>Cantidad</td>";
        echo "</tr>";
        echo "<td>$nombre1</td><td>$descripcion1</td><td>$present1</td><td>$precio1</td><td>$cant1</td>";
        echo "</tr>;";
        echo "<td>$nombre2</td><td>$descripcion2</td><td>$present2</td><td>$precio2</td><td>$cant2</td>";
        echo "</tr>;";
        echo "</table>";
        echo("<br>");
        echo("<br>");
        ?>
    <a align="center" href="busqueda.php" ><h2>Buscar producto</h2></a>
<br>
<br>

</form>
    </div>
  
</body>
</html>