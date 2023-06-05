<?php
// BUCLE WHILE
// Estructura de control que itera o repite la ejecución  de una serie de instrucciones tantas veces como sea necesaria en base a una condicion
// while (condicion)
//bloque de instrucciones
//otra instruccion

$numero = 0;

while ($numero <=100){
 echo "$numero";
    if($numero !=100){
        echo ", ";
    }
  $numero++;
}

echo "<hr>";

// Ejemplo

// // Verificar que hay un parametro 'numero' a traves del metodo GET
// if($_GET['numero']){ // Si hay un parametro 'numero' en el metodo $_GET, esto es TRUE, por lo tanto
//     $numero =$_GET['numero']; // cree una Variable $numero y asignarle el valor del parametro 'numero'
// }else{
//     $numero = 1; // Si no hay un parametro 'numero', es decir que es FALSE, cree la Variable $numero y asignarle el valor 1
// }

// var_dump($numero); // para ver que valor lleva la variable $numero, si lleva 1, no existe el parametro 'numero'

if(isset($_GET['numero'])){ // isset comprueba si existe una variable, o un array
    $numero = (int) $_GET['numero'];// cuando se agrega el tipo de datos en este caso int, estamos casteando un dato, cambiando el tipo de dato
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero </h1>";

$contador =0;
while ($contador <=10){
    echo "$numero X $contador = ".($numero*$contador);
    echo '<hr>';

    $contador++;
}

// Do While la condicion se evalua la final

// do{
// //bloque de intrucciones

// }while(condicion);

$edad = 17;
$contador =1;

do{
    echo "Tienes acceso al local privado $contador <br>";
    $contador++;
}while($edad >=18 && $contador<=10);

?>