<?php
/* Funciones: una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden reutilizarse solamente invocando a la funcion tanta veces como queramos
*/

// function nombreDeLaFuncion ($parametro){
//     bloque o conjunto de instrucciones 
// }

//nombreDeLaFuncion($mi_parametro);

// Ejemplo 1 y 2

/*
function muestraNombres(){
    echo "Jonathan Caro <br>";
    echo "Azucena Carrillo <br>";
    echo "Jacobo Caro Carrillo <br>";
    echo "Elizabeth Caro Carrillo <br>";
    echo "<hr>";
}

// invocar la funcion muestraNombres()

muestraNombres();
muestraNombres();

function tabla($numero){
    echo "<h3>Tabla de Multiplicar del numero $numero </h3>";
    for ($i=1;$i<=10;$i++){
        $operacion = $numero*$i;
        echo "$numero X $i = ".$operacion."<br>";
    }
}

// if(isset($_GET['numero'])){ // Isset Verifica que existe un numero en la URL
//     tabla($_GET['numero']); // Si hay un numero en la url, lleve esa variable a la funcion tabla
//     tabla(5);
//     tabla(30-20);
//     tabla(50);


// }else{
//     echo "no hay numero"; 
// }

for($x=0;$x<=10;$x++){
    tabla($x);
}
*/

// Ejemplo3
/*
function calculadora($numero1,$numero2,$negrita = false){
//conjunto de instrucciones
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto ="";

        if($negrita!=false){
            $cadena_texto .= "<h2>";
        }

        $cadena_texto .= "la suma: $suma <br>";
        $cadena_texto .= "la resta: $resta <br>";
        $cadena_texto .= "la multiplicacion: $multiplicacion <br>";
        $cadena_texto .= "la division: $division <br>";
    
        if($negrita!=false){
            $cadena_texto .= "</h2>";
        }

    $cadena_texto .= "<hr>";

    return $cadena_texto;

}

echo calculadora(1,5,true);
*/

// ejemplo 4

function getNombre ($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
};

function getApellidos ($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
};

function devuelveElNombre ($nombre, $apellidos){
    $texto = getNombre($nombre)
            ."<br/>".
            getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre("Jonathan","Caro");

?>