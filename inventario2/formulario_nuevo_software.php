<?php
session_start();
require_once 'funciones.php';
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
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <form action="resultado1.php" method="GET">
            <div>Titulo: <input type="text" name="nombre" 
                              value="<?php echo $_SESSION['datos'][0]; ?>"/>
            </div>
            <div>URL <input type="text" name="apellido" 
                            value="<?php echo $_SESSION['datos'][1]; ?>"/></div>
            </div>
            <input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>