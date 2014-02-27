<?php session_start(); ?>
<?php require_once 'funciones_bd.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Confirmar Eliminar Software</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Confirmar Eliminar Registro Software</div>
<?php
$_SESSION['id'] = (isset($_REQUEST['id']))?
            $_REQUEST['id']:0;

$bd = conectaBd();
$consulta = "SELECT * FROM software WHERE id=".$_SESSION['id'];
$resultado = $bd->query($consulta);

if (!$resultado) {
       $url = "error.php?msg_error=Error_Consulta_Confirmar_Eliminar";
       header('Location:'.$url);
} else { 
       $registro = $resultado->fetch(); 
       if(!$registro) {
           $url = "error.php?msg_error=Error_Registro_Software_inexistente";
           header('Location:'.$url);
       } else {
           echo "Titulo=".$registro['titulo']."<br/>";
           echo "URL = ".$registro['url']."<br/>";
           echo "<a href='eliminar_software.php'>Confirmar Eliminar</a><br/>";
           echo "<a href='listado_software.php'>Volver a Listado</a><br/>";
       }
}  
?>
    </body>
</html>
