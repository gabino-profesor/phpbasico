<?php
session_start();
require_once 'constantes.php';
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
            <div>Nombre: <input type="text" name="nombre" 
                                value="<?php echo $_SESSION['datos'][0]; ?>"/></div>
            <?php
                if ($_SESSION['errores'][0]) {
                    echo "<div class 'error'>".MSG_ERR_NOMBRE."</div>";
                }
            ?>
            <div>Descripción <input type="text" name="desc" 
                                value="<?php echo $_SESSION['datos'][1]; ?>"/></div>
            <?php
                if ($_SESSION['errores'][1]) {
                    echo "<div class 'error'>".MSG_ERR_DESC."</div>";
                }
            ?>
            <div>IP <input type="text" name="ip" 
                           value="<?php echo $_SESSION['datos'][2]; ?>"/></div>
            <?php
                if ($_SESSION['errores'][2]) {
                    echo "<div class 'error'>".MSG_ERR_IP."</div>";
                }
            ?>
            <div>RAM <input type="text" name="ram" value="<?php echo $_SESSION['datos'][3]; ?>" /></div>
               <?php
                if ($_SESSION['errores'][3]) {
                    echo "<div class 'error'>".MSG_ERR_RAM."</div>";
                }
            ?>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>

