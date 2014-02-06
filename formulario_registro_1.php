<?php 
session_start();
    $login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
    $email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Registro</div>
        <form action="resultado_registro_1.php" method="GET">
            <p>Login: <input type="text" name="login" value="<?php echo $login; ?>"> </p>    
            <p>Password <input type="password" name="password"/></p>
            <p>Re-Password <input type="password" name="passwordr"/></p>
            <p>Email <input type="text" name="email" value="<?php echo $email; ?>"/></p>
            <p><input type="submit" value="Enviar" /></p>
        </form>
    </body>
</html>



