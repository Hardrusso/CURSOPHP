<?php
    /* 
    Variables locales: Se definen dentro de la funcion y no pueden ser usadas fuera de la funcion, solo estan disponibles dentro, a no ser que se haga un return
    variables globales : Se declaran  fuera de la funcion  y estan disponibles dentron y fuera de las funciones
    */

    $frase = "Ni los genion son tan genios y los mediocres tan mediocres";

    function holaMundo (){
        echo "<h1>$frase</h1>";
    };

?>