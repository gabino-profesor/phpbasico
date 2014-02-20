<?php require_once 'funciones_bd.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Favoritos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Listado de Software</div>
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
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".$registro['titulo']."</td>";
                    echo "<td>".$registro['url']."</td>";
                    echo "</tr>";          
                }
                echo "</table>";
            }
            
            $bd = null;
        ?>   
    </body>
</html>
