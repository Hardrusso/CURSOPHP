<?php
/*Hacer un programa que muestre todos los numeros entre dos numeros
que nos lleguen por la url ($_GET)
*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = (int) $_GET['numero1'];
    $numero2 = (int) $_GET['numero2'];

    
    if ($numero1<$numero2){
        echo "<h1>Los numeros entre $numero1 y $numero2 son:</h1><br>";
        for($i=$numero1;$i<=$numero2;$i++){
        
            echo "$i, ";
        }
    }elseif($numero2<$numero1){
        echo "<h1>Los numeros entre $numero2 y $numero1 son:</h1><br>";
        for($i=$numero2;$i<=$numero1;$i++){
        
            echo "$i ";
        }
    }
    
}else{
    echo "<h1>LOS PARAMETROS GET NO EXISTEN</h1>";
}
    

?>