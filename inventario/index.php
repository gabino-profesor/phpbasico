<?php require_once 'funciones_bd.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Inventario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="estilo.css" type="text/css=" rel="stylesheet">
    </head>
    <body>
        <div>INVENTARIO</div>
        <div>
        <a href="formulario_nuevo_equipo.php">Nuevo Equipo</a>
        </div>
        <?php
            $bd = conectaBd();
            $consulta = "SELECT * FROM equipo";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                echo "Error en la consulta";
            } else {
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>IP</th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td>".$registro['nombre']."</td>";
                    echo "<td>".$registro['ip']."</td>";
                    echo "<td><a href=formulario_editar_equipo.php?id=".$registro['id'].">Editar</a></td>";
                    echo "</tr>";          
                }
                echo "</table>";
            }
            
            
            $bd = null;
        ?>    
    </body>
</html>

