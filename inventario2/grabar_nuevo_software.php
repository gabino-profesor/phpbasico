<?php
require_once 'funciones_bd.php';

$db = conectaDb();

$titulo    = $_REQUEST['titulo'];
$url = $_REQUEST['url'];

$consulta = "INSERT INTO software 
    (titulo, url)
    VALUES (:titulo, :url)";
$resultado = $db->prepare($consulta);
if ($resultado->execute(array(":titulo" => $titulo, ":url" => $url))) {
    print "<p>Registro creado correctamente.</p>\n";
} else {
    print "<p>Error al crear el registro.</p>\n";
}

$db = null;


?>