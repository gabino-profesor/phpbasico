<?php require_once 'validar.php'; ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Validación Formulario</div>
        <?php
            //Entrada datos       
            $nombre = $_REQUEST['nombre'];
            $edad = $_REQUEST['edad'];
            //Validar datos
            $error = false;
            $mensaje_error = "ERROR: ";
            //Validar nombre
            $nombre = limpiarTexto($nombre);
            if (!validarNombre($nombre)) {
                $error = true;
                $mensaje_error .= "Nombre obligatorio<br>";
            }            
            //Validar edad
            if (!validarEdad($edad)) {
                $error = true;
                $mensaje_error .= "Edad debe ser un número...<br>";
            } 
            //Cálculo y Salida
            if (!$error) {
                // Si no hay error
                if ($edad>=18) {
                    echo $nombre." es Mayor de Edad";
                } else {    
                    echo $nombre." es Menor de edad";
                }
            } else {
                // Si hay error
                echo $mensaje_error;
                echo "<a href='javascript:history.go(-1);'>Volver al formulario</a>";
            }
        ?>
    </body>
</html>

