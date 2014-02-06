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
    $resultadoValidacion = array();
    
    $login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
    $password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";
    $passwordr = (isset($_REQUEST['passwordr']))?
            $_REQUEST['passwordr']:"";
    $email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";
    
    if (!validarLogin($login)) {
        $resultadoValidacion[] = MSG_ERR_LOGIN;
    }
    
    if (!validarPassword($password)) {
        $resultadoValidacion[] = MSG_ERR_PASSWORD;
    } else {
        if ($password != $passwordr) {
            $resultadoValidacion[] = MSG_ERR_PASSWORDR;
        }          
    }
    
    if (!validarEmail($email)) {
        $resultadoValidacion[] = MSG_ERR_EMAIL;
    }    
    
    return $resultadoValidacion;
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
            $errores = validarDatosRegistro();
            if (count($errores)==0) {
                echo "Datos correctos. Se puede registrar...";
            } else {
                $_SESSION['errores'] = $errores;
                $url = "formulario_registro_1.php?".
                        $_SERVER['QUERY_STRING'];
                header('Location:'.$url);
            }
            
        ?>    
    </body>
</html>

