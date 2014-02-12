<?php 
session_start();
    require_once 'errores_registro.php';
    // Estructura: campos del formulario
    $login = (isset($_SESSION['login']))?
            $_SESSION['login']:"";
    // $password No se Recupera, se reescribe siempre
    // $passwordR No se Recupera, se reescribe siempre
    $email = (isset($_SESSION['email']))?
            $_SESSION['email']:"";
    // Estructura para Errores
    $errLogin = (isset($_SESSION['errLogin']))?
            $_SESSION['errLogin']:FALSE;
    $errPassword = (isset($_SESSION['errPassword']))?
            $_SESSION['errPassword']:FALSE;
    $errPasswordR = (isset($_SESSION['errPasswordR']))?
            $_SESSION['errLogin']:FALSE;
    $errEmail = (isset($_SESSION['errEmail']))?
            $_SESSION['errEmail']:FALSE;
    
    $_SESSION['errLogin']=FALSE;
    $_SESSION['errPassword']=FALSE;
    $_SESSION['errPasswordR']=FALSE;
    $_SESSION['errEmail']=FALSE;
    
    
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
        <form action="resultado_registro_2.php" method="GET">
            <div>Login: <input type="text" name="login" value="<?php echo $login; ?>"> </div>    
            <div><?php 
                if($errLogin) echo MSG_ERR_LOGIN;
            ?></div>
            <div>Password <input type="password" name="password"/></div>
            <div><?php 
                if($errPassword) echo MSG_ERR_PASSWORD;
            ?></div>
            <div>Re-Password <input type="password" name="passwordr"/></div>
            <div><?php 
                if($errPasswordR) echo MSG_ERR_PASSWORDR;
            ?></div>
            <div>Email <input type="text" name="email" value="<?php echo $email; ?>"/></div>
            <div><?php 
                if($errEmail) echo MSG_ERR_EMAIL;
            ?></div>
            <div><input type="submit" value="Enviar" /></div>
        </form>
    </body>
</html>



