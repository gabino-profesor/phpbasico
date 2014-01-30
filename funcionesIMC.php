<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('PESO_MIN', 1); // Kgs
define('PESO_MAX', 500); // Kgs
define('ESTATURA_MIN', 50); //cms
define('ESTATURA_MAX', 300); //cms

define('MSG_ERR_PESO', 'El peso debe ser un valor ...');
define('MSG_ERR_ESTATURA', 'La estatura debe ser un valor ...');

/**
 * calculoIMC
 * Calcula el valor IMC
 * @param masa expresada en kgs [0-500]
 * @param estatura espresada en cms [0-300]
 * @return float resultado del cálculo imc redondeado a 2 decimales
 * @link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal
 */
function calculoIMC($masa, $estatura) {
  $estatura = $estatura / 100; // cms a mts
  $imc = $masa /  ($estatura * $estatura);
  return round($imc, 2);
}

/**
 * clasificacionIMC
 * Calcula la clasificación ...
 * @param imc Valor válido de IMC
 * @return String Contiene clasificación según valor
 * @link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal
 */
function clasificacionIMC($imc) {
    if ($imc < 18.5) {
        $clasificacion = "Bajo peso";       
    } elseif ($imc < 25) {
        $clasificacion = "Normal"; 
    } elseif ($imc < 30) {
        $clasificacion = "Sobrepeso"; 
    } else {
        $clasificacion = "Obesisad";
    }
    return $clasificacion;
}

/**
 * enRango
 * Indica si un valor está en un rango determinado [inicio,fin]
 * @param inicio
 * @param fin
 * @param valor
 * @return true si valor esta en el rango [inicio, fin], sino false
 */
function enRango($inicio, $fin, $valor) {
    return ($valor>=$inicio && $valor<=$fin);
}


/**
 * validarPeso
 * Validar peso: Indica si el valor de peso es correcto
 * @param peso debe ser un valor numérico entre lo definido en ctes...
 * @return boolean True si cumple y False en caso contrario
 */
function validarPeso($peso) {
    if (filter_var($peso,FILTER_VALIDATE_INT)) {
        $resultado = enRango(PESO_MIN, PESO_MAX, $peso);
    } else {
        $resultado = FALSE;
    }
    return $resultado;
}

/**
 * validarEstatura
 * Validar estatura: Indica si el valor de estatura es correcto
 * @param estatura debe ser un valor numérico entre ctes definidas...
 * @return boolean True si cumple y False en caso contrario
 */
function validarEstatura($estatura) {
    if (filter_var($estatura,FILTER_VALIDATE_INT)) {
        $resultado = enRango(ESTATURA_MIN, ESTATURA_MAX, $estatura);
    } else {
        $resultado = FALSE;
    }
    return $resultado;
}
