<?php
session_start();
require_once 'bbdd.php';


$db = conectaBd();
   $id = $_SESSION['IdProducto'];
    
    
    $consulta = "DELETE FROM producto 
        WHERE IdProducto= :IdProducto";
    
    $resultado = $db->prepare($consulta);
    if ($resultado->execute(array(":IdProducto" => $id))) {
        //vaciamos las variables de sesión si todo va bien.
        unset ($_SESSION['IdProducto']);
       // redirigimos a la página del listado 
        $destino = "listado.php";
        header('Location:'.$destino);
    } else {
        $destino = "error.php?msg_error=Error_Borrar_Producto";
        header('Location:'.$destino);
    }

    $db = null;

