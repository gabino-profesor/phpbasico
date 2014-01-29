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
            $imc = 0.0;
            $clasificacion = "";
            //Cálculo
            $imc = calculoIMC($masa, $estatura);
            $clasificacion = clasificacionIMC($imc);
            //
            echo "IMC = ".$imc;
            echo "<br>";
            echo "Clasificación = ".$clasificacion;
        ?>
    </body>
</html>

