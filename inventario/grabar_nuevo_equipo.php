<?php
session_start();
require_once 'funciones_validar.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function validarDatosRegistro() {
    // Recuperar datos Enviados desde formulario_nuevo_equipo.php
    $datos = Array();
    $datos[0] = (isset($_REQUEST['nombre']))?
            $_REQUEST['nombre']:"";
    $datos[1] = (isset($_REQUEST['desc']))?
            $_REQUEST['desc']:"";
    $datos[2] = (isset($_REQUEST['ip']))?
            $_REQUEST['ip']:"";
    $datos[3] = (isset($_REQUEST['ram']))?
            $_REQUEST['ram']:"";
    //-----validar ---- //
    $errores = Array();
    $errores[0] = validarNombre($datos[0]);
    $errores[1] = validarDesc($datos[1]);
    $errores[2] = validarIP($datos[2]);
    $errores[3] = validarRam($datos[3]);
    // ----- Asignar a variables de Sesión ----//
    $_SESSION['datos'] = $datos;
    $_SESSION['errores'] = $errores;  
    $_SESSION['hayErrores'] = 
            ($errores[0] || $errores[1] ||
             $errores[2] ||$errores[3]);
    
}


// PRINCIPAL //
validarDatosRegistro();
if ($_SESSION['hayErrores']) {
    $url = "formulario_nuevo_equipo.php";
    header('Location:'.$url);
} else {
    echo "Grabar Equipo en Base de Datos...";
}

