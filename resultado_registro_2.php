<?php
session_start();
require_once 'funciones_registro.php';
require_once 'errores_registro.php';
/**
 * Verifica que los datos recibidos por $_REQUEST son válidos
 * @return bool True si son válidos, False en caso contrario
 */
function validarDatosRegistro() {
    /**
     * validar login
     * validar password
     * validar passwordr es igual a password
     * validar email
     */
    
    $login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
    $password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";
    $passwordr = (isset($_REQUEST['passwordr']))?
            $_REQUEST['passwordr']:"";
    $email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";
    
    if (!validarLogin($login)) {
        $_SESSION['errLogin'] = TRUE;
    }
    
    if (!validarPassword($password)) {
        $_SESSION['errPassword'] = TRUE;
    } else {
        if ($password != $passwordr) {
            $_SESSION['errPasswordR'] = TRUE;
        }          
    }
    
    if (!validarEmail($email)) {
        $_SESSION['errEmail'] = TRUE;
    }    
    
} 
?>
<html>
    <head>
        <title>Resultado Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado Registro</div>
        <?php
            validarDatosRegistro();
            if (!$_SESSION['errLogin'] && !$_SESSION['errPassword']
                    && !$_SESSION['errPasswordR'] && !$_SESSION['errEmail']) {
                echo "Datos correctos. Se puede registrar...";
            } else {
                $url = "formulario_registro_2.php";
                header('Location:'.$url);
            }
            
        ?>    
    </body>
</html>

