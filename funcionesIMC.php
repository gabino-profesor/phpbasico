<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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