<?php
/*
TIPOS DE DATOS
- ENTERO (int / integer) = 99
- DECIMALES / COMA FLOTANTE (double / flat) = 3.1463887
- CADENA DE CARACTERES (string) = 'Yo soy un String'
- BOLEANO (bool) =  true or false
- NULO (null)
- Array (Colección de datos)
- Objetos
*/


$numero = 100;
$decimal = 27.668;
$texto =  'soy un texto';
$texto2 = "soy un texto 2 $decimal";//con comillas doble, me concatena el valor de la variable $decimal, en este caso 27.668
$texto3 = 'soy un texto 3 $decimal'; // con comillas simple, toma el valor de la variable $decimal como string
$texto4 = 'soy un \" texto 4 '. $decimal; // si quiero concatenar con comillas simple, debo cerrar el string poner el punto y luego la variable
$verdadero = true;

$nula = null;

echo gettype($numero);
echo '<br>';
echo gettype($decimal);
echo '<br>';
echo gettype($texto);
echo '<br>';
echo gettype($verdadero);
echo '<br>';
echo $verdadero;
echo '<br>';
echo gettype($nula);
echo '<br>';
echo $texto;
echo '<br>';
echo $texto2;
echo '<br>';
echo $texto3;
echo '<br>';
echo $texto4;
echo '<br>';

// Debugear

$mi_nombre [] = 'Laura ve MARIA DB';
$mi_nombre [] = ' ve \n MARIA DB';
$mi_nombre [] = ' ve MARIA DB';
$mi_nombre [] = ' ve MARIA DB';
$mi_nombre [] = ' ve MARIA DB';
$mi_nombre [] = ' ve MARIA DB';

var_dump ($mi_nombre);

?>