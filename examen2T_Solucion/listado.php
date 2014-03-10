<?php
require_once 'bbdd.php'; 
require_once 'func.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Examen 2T</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="productos">&nbsp;</div>
        <h1>Listado de Productos</h1>
                <ul>
        <li><a href="index.php">Inicio</a></li>           
        <li><a href="falta2.php">Alta Producto (con validacion)</a></li>
        </ul>
        
        <?php
            $bd = conectaBd();
            $consulta = "SELECT * FROM producto ORDER By NombreProducto";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                $url = "error.php?msg_error=Listado1_Error_Consulta";
                header('Location:'.$url);
            } else {
                echo "<table border=1 width=100%>";
                echo "<tr>";
                echo "<th>Producto</th>";
                echo "<th>Precio</th>";
                echo "<th>Existencias</th>";
                echo "<th></th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".$registro['NombreProducto']."</td>";
                    echo "<td align=right>".formatoMoneda($registro['PrecioUnidad'])."</td>";
                    echo "<td align=right>".$registro['UnidadesExistencia']."</td>";
                    $irBorrar = "cborrar.php?IdProducto=".$registro['IdProducto'];
                    echo "<td><a href=".$irBorrar.">Borrar</a></td>";
                }
                echo "</table>";
            }
            
            $bd = null;
        ?>   
    </body>
</html>
