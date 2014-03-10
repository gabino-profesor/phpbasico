<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Constantes


define('MSG_ERR', "Error...");
define('MSG_ERR_NOMBRE', "Error en el nombre");
define('MSG_ERR_PRECIO', "Error en el precio");
define('MSG_ERR_EXISTENCIAS', "Error en las existencias");

/**
 * Limpia entrada text
 * @param String $valor
 * @return String
 */
function limpiar($valor) {
    return strip_tags(trim(htmlspecialchars($valor, ENT_QUOTES, "ISO-8859-1"))); 
}

/**
 * Devuelve formtao moneda
 * @param String $valor
 * @return String
 */
function formatoMoneda($valor) {
    return number_format($valor, 2, ',', ' ').'&euro;';
}

/**
 * Valida si una cadena una vez limpia 
 * tiene entre 1 y 50 caracteres
 * @param type $valor
 * @return boolean
 */
function validarNombreProducto($valor) {
    $valor = limpiar($valor);
    if (strlen($valor)>0 && strlen($valor)<=50){
        return TRUE;
    } else {
        return FALSE;
    }
}

/**
 * Mira si una entrada es un valor numérico con decimales
 * y además es mayor que 0
 * @param String $valor
 * @return boolean
 */
function validarPrecio($valor) {
    if (filter_var($valor, FILTER_VALIDATE_FLOAT)&& $valor>0){
        return TRUE;
    } else {
        return FALSE;
    }
    // return (filter_var($valor, FILTER_VALIDATE_FLOAT)&& $valor>0);
}


/**
 * Mira si una entrada es un valor numérico entreo
 * y además es mayor que 0  
 * @param type $valor
 * @return boolean
 */
function validarExistencia($valor) {
   if (filter_var($valor, FILTER_VALIDATE_INT)&& $valor>=0){
        return TRUE;
    } else {
        return FALSE;
    }
    // return (filter_var($valor, FILTER_VALIDATE_INT)&& $valor>=0);
}

