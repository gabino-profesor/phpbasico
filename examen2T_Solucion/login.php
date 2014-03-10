<?php session_start(); 
require_once 'bbdd.php'; 

$login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
$password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";

if ($login == "" || $password =="") {
    $url = "acceso.php";
    header('Location:'.$url);
}

$bd = conectaBd();

$consulta = "SELECT * FROM usuario WHERE login = :login and password = :password";
$resultado = $bd->prepare($consulta);
if (!$resultado->execute(array(":login" => $login,":password" => $password))) {
       $url = "error.php?msg_error=Error_Consulta__Login";
       header('Location:'.$url);
} else { 
       $registro = $resultado->fetch(); 
       if(!$registro) {
           $url = "error.php?msg_error=Error_Usuario_Inexistente";
           header('Location:'.$url);
       } else {
           $_SESSION['usuario'] = $registro[2]; //Coger tercer campo: nombre
           $url = "proveedores.php";
           header('Location:'.$url);
       }
}  
?>
    </body>
</html>
