<?php
require_once 'head.php';
require_once 'funciones_bd.php'; 
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Software</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Listado de Software</div>
        <div><a href="formulario_nuevo_software.php">Nuevo Equipo</a></div>
        <?php
            $bd = conectaBd();
            $consulta = "SELECT * FROM software";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                echo "Error en la consulta";
            } else {
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>Titulo</th>";
                echo "<th>URL</th>";
                echo "<th></th>";
                echo "<th></th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".$registro['titulo']."</td>";
                    echo "<td>";
                    echo "<a href=".$registro['url']." target='_blank'>";
                    echo $registro['url'];
                    echo "</a>";
                    echo "</td>";
                    echo "<td>";
                    $destino="formulario_editar_software.php?id=".$registro['id'];
                    echo "<a href=".$destino.">Editar</a></td>";
                    echo "</td>";
                    echo "<td>";
                    $destino="confirmar_eliminar_software.php?id=".$registro['id'];
                    echo "<a href=".$destino.">Eliminar</a></td>";                    
                    echo "</td>";          
                }
                echo "</table>";
            }
            
            $bd = null;
        ?>   
    </body>
</html>
