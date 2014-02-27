<?php session_start(); 
require_once 'funciones_bd.php'; 

$login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
$password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";


$bd = conectaBd();

$consulta = "SELECT * FROM usuario WHERE login = :login and password = :password";
$resultado = $db->prepare($consulta);
if ($resultado->execute(array(":login" => $login,":password" => $password))) {
       $url = "error.php?msg_error=Error_Consulta__Login";
       header('Location:'.$url);
} else { 
       $registro = $resultado->fetch(); 
       if(!$registro) {
           $url = "error.php?msg_error=Error_Usuario_Inexistente";
           header('Location:'.$url);
       } else {
           $_SESSION['usuario'] = $registro['nombre'];
           $url = "listado_software.php";
           header('Location:'.$url);
       }
}  
?>
    </body>
</html>
