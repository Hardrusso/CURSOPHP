<?php
/* Ejercicio 4: Recoger dos numero por url y hacer las operaciones basicas
*/
// if(isset($_GET['numero1'])){
//     $n1=(int)$_GET['numero1'];
// }else{
//     $n1=1;
// }

// if(isset($_GET['numero2'])){
//     $n2=(int)$_GET['numero2'];
// }else{
//     $n2=2;
// }

// echo "<h3>La Suma de $n1 y $n2 es:".$n1+$n2."</h3><hr>";
// echo "<h3>La Resta de $n1 y $n2 es:".$n1-$n2."</h3><hr>";
// echo "<h3>La Multiplicacion de $n1 y $n2 es:".$n1*$n2."</h3><hr>";
// echo "<h3>La Division de $n1 y $n2 es:".$n1/$n2."</h3><hr>";

if (isset($_GET['numero1']) && isset($_GET['numero2'])){
    $n1 = (int) $_GET['numero1'];
    $n2 = (int) $_GET['numero2'];

    echo "<h3>La Suma de $n1 y $n2 es:".$n1+$n2."</h3><hr>";
    echo "<h3>La Resta de $n1 y $n2 es:".$n1-$n2."</h3><hr>";
    echo "<h3>La Multiplicacion de $n1 y $n2 es:".$n1*$n2."</h3><hr>";
    echo "<h3>La Division de $n1 y $n2 es:".$n1/$n2."</h3><hr>";

}else{
    echo "<h3>INTRODUZCA VALORES EN LA URL</h3>";
}

?>