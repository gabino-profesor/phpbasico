<?php

/* 
 * Funciones Acceso y Manejo de BBDD
 */

/**
 * 
 * @return type
 */
function conectaBd()
{
    try {
        $db = new PDO("mysql:host=localhost", "root", "abc123.");
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        return($db);
    } catch (PDOException $e) {
        print "<p>Error: No puede conectarse con la base de datos.</p>\n";
        print "<p>Error: " . $e->getMessage() . "</p>\n";
        exit();
    }
}

?>