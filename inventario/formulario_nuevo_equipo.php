<?php
session_start();
require_once 'validar_registro.php';
    // Estructura: campos del formulario
$_SESSION['datos'] = (isset($_SESSION['datos']))?
            $_SESSION['datos']:Array('','','','');
$_SESSION['errores'] = (isset($_SESSION['errores']))?
            $_SESSION['errores']:Array(FALSE,FALSE,FALSE,FALSE);
$_SESSION['hayErrores'] = (isset($_SESSION['hayErrores']))?
            $_SESSION['hayErrores']:FALSE;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Nuevo Equipo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Datos Nuevo Equipo</div>
        <form action="grabar_nuevo_equipo.php" method="GET">
            <div>Nombre: <input type="text" name="nombre" /></div>
            <div>Descripción <input type="text" name="desc" /></div>
            <div>IP <input type="text" name="ip" /></div>
            <div>RAM <input type="text" name="ram" /></div>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>

