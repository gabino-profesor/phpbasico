<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   $msg_error = (isset($_REQUEST['msg_error']))?
            $_REQUEST['msg_error']:"Error no definido";
   $msg_error = str_replace('_', ' ', $msg_error);

?>
<html>
    <head>
        <title>Examen 2T</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="error">&nbsp;</div>
        <h1>Página de Error</h1>

        <div class="caja_error"><?php echo $msg_error; ?> </div>
        <br/>
        <ul>
        <li><a href="index.php">Inicio</a></li>            
        </ul>
    </body>
</html>