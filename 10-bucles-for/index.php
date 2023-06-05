<?php
// for(variable contador, condicion, incremento contador){
    //bloque de instrucciones
//}

// Ejemplo: quiero que me sume los numeros del 1 al 100 y me muestre el resultado final

$resultado = 0; // Se crea una variable para que nos muestre el resultado

for($i=0;$i<=100;$i++){
    $resultado += $i;
   // echo "<p>$resultado</p>";
}
echo "<h1>El Resultado es: $resultado</h1>";

echo "<hr>";

if(isset($_GET['numero'])){
    $numero = (int) $_GET['numero'];
} else{
    $numero = 1;
}

echo "<h3>Esta es la tabla del número $numero capturado desde la URL a traves del metodo GET </h4><hr>";


for($i=1;$i<=10;$i++){
    if($numero==22){
        echo "No se pueden mostrar las operaciones";
        break;
    }

    echo "<h3>$numero multiplicado $i = ".($numero*$i)."</h3><hr>";   
}


?>