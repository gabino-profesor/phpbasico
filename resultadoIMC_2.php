<?php require_once 'funcionesIMC.php'; ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado IMC</div>
        <?php
            $masa = $_REQUEST['masa'];
            $estatura = $_REQUEST['estatura'];
            $errores = array();
            if (!validarPeso($masa)) {
                $errores[] = MSG_ERR_PESO;
            }
             if (!validarPeso($estatura)) {
                $errores[] = MSG_ERR_ESTATURA;
            }
            if (count($errores)>0) {
                echo "Errores<br>";
                foreach($errores as $error) {
                    echo $error.'<br>';
                }
            } else {
                //Cálculo
                $imc = calculoIMC($masa, $estatura);
                $clasificacion = clasificacionIMC($imc);
                //presentación
                echo "IMC = ".$imc;
                echo "<br>";
                echo "Clasificación = ".$clasificacion;
            }
        ?>
    </body>
</html>

