<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    $url="error.php?msg_error=REQUIERE_LOGIN";
    header("Location:".$url);
}
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
<div class="caja">
<?php            
echo "<div>";
echo "Usuario=".$_SESSION['usuario'];
echo "</div>";
echo "<div>";
echo "<a href=logout.php>Logout</a>";
echo "</div>";
?>
</div>
        <div class="proveedores">&nbsp;</div>
        <h1>Listado de Proveedores</h1> 
    </body>
</html>

 <?php
 require_once 'bbdd.php';
 
            $bd = conectaBd();
            $consulta = "SELECT * FROM proveedor ORDER By NombreEmpresa";
            $resultado = $bd->query($consulta);
            if (!$resultado) {
                $url = "error.php?msg_error=Listado1_Error_Consulta";
                header('Location:'.$url);
            } else {
                echo "<table border=1 width=100%>";
                echo "<tr>";
                echo "<th>Empresa</th>";
                echo "<th>Contacto</th>";
                echo "<th>Cargo</th>";
                echo "<th>Pais</th>";
                echo "<th>Telefono</th>";
                echo "</tr>";
                foreach($resultado as $registro) {
                    echo "<tr>";
                    echo "<td align=left>".$registro['NombreEmpresa']."</td>";
                    echo "<td align=left>".$registro['NombreContacto']."</td>";
                    echo "<td align=left>".$registro['CargoContacto']."</td>";        
                    echo "<td align=left>".$registro['Pais']."</td>";
                    echo "<td align=left>".$registro['Telefono']."</td>";        
                   }
                echo "</table>";
            }
            
            $bd = null;
?>