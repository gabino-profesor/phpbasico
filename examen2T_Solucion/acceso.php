<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Examen 2T</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="login">&nbsp;</div>
        <h1>Acceso</h1>
        <ul>
        <li><a href="index.php">Inicio</a></li> 
        <li><a href="falta1.php">Registro nuevo usuario</a></li> 
        </ul>
        <form action="login.php" method="POST">
            <div>Login: <input type="text" name="login" /></div>
            <div>Password: <input type="password" name="password" /></div>
            <div><input type="submit" value="Entrar" /></div>
        </form>
        
    </body>
</html>
