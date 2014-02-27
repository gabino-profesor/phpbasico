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
        <title>Equipo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Error</div>
        <div><?php echo $msg_error; ?> </div>
        <div><a href="index.php">Volver al inicio</a></div>   
    </body>
</html>