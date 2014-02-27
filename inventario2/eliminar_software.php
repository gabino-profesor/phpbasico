<?php
session_start();
require_once 'funciones_bd.php';
require_once 'funciones.php';

    
    $_SESSION['id'] = (isset($_SESSION['id']))?
            $_SESSION['id']:0;
    
    echo $_SESSION['id'];
    $db = conectaBd();
     
    $consulta = "DELETE FROM software WHERE id = :id ";
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":id" => $_SESSION['id']))) {
            unset($_SESSION['id']);
            $url = "listado_software.php";
            header('Location:'.$url);
    } else {
        $url = "error.php?msg_error=Error_Eliminar_Software";
        header('Location:'.$url);
    }

    $db = null;


?>