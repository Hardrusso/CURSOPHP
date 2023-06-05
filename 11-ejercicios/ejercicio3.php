<?php
/* Escribir en pantalla los cuadrados de los primero numeros naturales
PD usar bucle while
*/

$numero = 1;
while($numero<=40){
    $cuadrado = $numero*$numero;
    echo "<h3>El Cudrado de $numero es = $cuadrado</h3><hr>";
    $numero++;

};

for($numero=1;$numero<=40;$numero++){
    $cuadrado = $numero*$numero;
    echo "<h3>El Cudrado de $numero es = $cuadrado</h3><hr>";
}

?>
