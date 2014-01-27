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
            $beca = isset($_REQUEST['beca']);
            $sexo = (isset($_REQUEST['sexo']))?$_REQUEST['sexo']:false;
            $estado = (isset($_REQUEST['estado']))?$_REQUEST['estado']:false;
            $aficiones = (isset($_REQUEST['aficiones']))?$_REQUEST['aficiones']:false;
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
            if (!($sexo)) {
                $error = true;
                $mensaje_error .= "Sexo no elegido ...<br>";
            }
            if (!($estado)) {
                $error = true;
                $mensaje_error .= "Estado cicvil no elegido ...<br>";
            }
            if (!($aficiones)) {
                $error = true;
                $mensaje_error .= "Debe elegir alguna afición ...<br>";
            }            
            //Cálculo y Salida
            if (!$error) {
                // Si no hay error
                if ($edad>=18) {
                    echo $nombre." es Mayor de Edad<br>";
                } else {    
                    echo $nombre." es Menor de edad<br>";
                }
                if ($beca) {
                    echo "Solicita beca";
                } else {
                    echo "No solicita beca";
                }
                echo "Sexo = ".$sexo."<br>";
                echo "Estado Civil =".$estado."<br>";
                echo "Aficciones Elegidas<br>";
                for($i=0; $i<count($aficiones); $i++) {
                    print_r($aficiones[$i]);
                    echo '<br>';
                }
                foreach ($aficiones as $aficion) {
                    echo ($aficion);
                    echo '<br>';
                }
            } else {
                // Si hay error
                echo $mensaje_error;
                echo "<a href='javascript:history.go(-1);'>Volver al formulario</a>";
            }
        ?>
    </body>
</html>

