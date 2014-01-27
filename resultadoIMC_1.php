<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado IMC</div>
        <?php
            //print_r($_REQUEST);
            $masa = $_REQUEST['masa'];
            $estatura = $_REQUEST['estatura'];
            $imc = 0.0;
            $clasificacion = "";
            //Cálculo
            $estatura = $estatura / 100; // cms a mts
            $imc = $masa /  ($estatura * $estatura);
            
            echo "Valor IMC = ";
            echo $imc;
            
            if ($imc < 18.5) {
                $clasificacion = "Bajo peso";       
            } elseif ($imc < 25) {
                $clasificacion = "Normal"; 
            } elseif ($imc < 30) {
                $clasificacion = "Sobrepeso"; 
            } else {
                $clasificacion = "Obesisad";
            }
            
            echo "<br>";
            echo "Clasificación = ".$clasificacion;
        ?>
    </body>
</html>

