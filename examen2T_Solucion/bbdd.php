<?php

/* 
 * Funciones Acceso y Manejo de BBDD
 */

define('BD_USUARIO', 'root');
define('BD_PASSWORD', 'abc123.');
define('BD_NOME', 'inventario');
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
          $url = "error.php?msg_error=Base_de_datos_fuera_de_servicio";
          header('Location:'.$url);
          exit();
    }
}



?>


