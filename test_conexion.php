<?php

/* 
 * Funciones Acceso y Manejo de BBDD
 */

define('BD_USUARIO', '****');
define('BD_PASSWORD', '****');
define('BD_NOME', 'wirtzapps');
define('BD_CONEX_PDO', 'mysql:host=localhost;dbname='.BD_NOME);


/**
 * 
 * @return type
 */
function conectaBd()
{
    try {
        $db = new PDO(BD_CONEX_PDO, BD_USUARIO, BD_PASSWORD);
        return($db);
    } catch (PDOException $e) {
        print "<p>Error: No puede conectarse con la base de datos.</p>\n";
        print "<p>Error: " . $e->getMessage() . "</p>\n";
        exit();
    }
}

$bd = conectaBd();
echo "Correcto..."


?>