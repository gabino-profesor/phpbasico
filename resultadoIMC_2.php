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
            $peso = $_REQUEST['peso'];
            $estatura = $_REQUEST['estatura'];
            $errores = "";
            
             if (!validarPeso($peso)) {
                print_r("ErrorPaso:".$peso); 
                $errores .= "error_peso";
            }
            if (!validarEstatura($estatura)) {
                if (strlen($errores)>0) $errores .= '&';
                $errores .= "error_estatura";
            }
            
            if (strlen($errores)>0) {
                $url = "http://".$_SERVER['SERVER_NAME']."/phpbasico/formularioIMC_2.php?".$_SERVER['QUERY_STRING']."&".$errores;
                //print_r($url);
               header('Location:'.$url);
            } else {
                //Cálculo
                $imc = calculoIMC($peso, $estatura);
                $clasificacion = clasificacionIMC($imc);
                //presentación
                echo "IMC = ".$imc;
                echo "<br>";
                echo "Clasificación = ".$clasificacion;
            }
        ?>
    </body>
</html>

