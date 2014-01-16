<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            /* 
             * Mostrar cadenas
             */
            $saludo = "Hola";
            $destino = "Mundo";

            echo "¡".$saludo." ".$destino."!";
            echo "<br>";
            echo "¡$saludo $destino!";
            echo "<br>";
            echo "¡Hola Mundo!";
            echo "<br>";
            $saludo_total = "¡";
            $saludo_total .= $saludo;
            $saludo_total .= " ";
            $saludo_total .= $destino;
            $saludo_total .= "!";
            echo $saludo_total;
            // Números
            echo "<br>";
            $valor1 = 10;
            $valor2 = 20;
            $suma = $valor1 + $valor2;
            echo "La suma es ".$suma;
            //
                echo "<br>";
            $valor1 = 10;
            $valor2 = 20;
            $suma = $valor1 + $valor2;
            echo "La suma es ".$suma;
        ?>
    </body>
</html>

