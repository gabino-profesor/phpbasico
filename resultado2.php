<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <?php
            //Entrada datos
            $nombre = "";
            if (isset($_REQUEST['nombre'])) {
                $nombre = $_REQUEST['nombre'];
            }    
            $edad = $_REQUEST['edad'];
            //Validar datos
            $error = false;
            $mensaje_error = "ERROR: ";
            //Validar nombre
            if ($nombre == "") {
                $error = true;
                $mensaje_error .= "Nombre obligatorio<br>";
            }            
            //Validar edad
            if (!is_numeric($edad)) {
                $error = true;
                $mensaje_error .= "Edad debe ser un número<br>";
            } else {
                //Es un número--> Verificar (0,100]
                if ($edad <= 0 || $edad > 100) {
                    $error = true;
                    $mensaje_error .= "Edad debe estar (0, 100] <br>";
                }
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

