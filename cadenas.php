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
        ?>
    </body>
</html>

