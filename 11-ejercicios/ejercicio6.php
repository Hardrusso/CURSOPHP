<?php
/* Mostrar una tabla de html con las tablas de multiplicar del 1 al 10
*/

// echo "<table border='1'><tr>"; //inicio tabla
//     echo "<tr>"; // abro fila 1 de celdas Enunciado
//         for($cabecera = 1;$cabecera<=10;$cabecera++){
//             echo "<th>Tabla del $cabecera</th>";
//         }
//     echo "</tr>"; // cierro fila 1 de celdas
//     echo "<tr>"; // abro fila 2
//         for($i=1;$i<=10;$i++){
//             echo "<td>";
//                 for($x=1;$x<=10;$x++){
//                     echo "$i X $x = ".($i*$x)."<hr>";
//                 }
//             echo"</td>";
//         }
//     echo "</tr>";// cierro fila 2
// echo "</table>"; // fin de la tabla

echo "<table border='1'>";
    echo "<tr>"; //Abro la fila para los datos de la cabecera
        for($encabezado=1;$encabezado<=10;$encabezado++){
            echo "<th> Tabla del $encabezado </th>";
        }
    echo "</tr>"; // cierro la fila para los datos de la cabecera
    
    echo "<tr>"; // abro fila para insertar las tablas de multiplicar, estas van a estar en una misma fila, solo con salto de linea con linea hr
        for($multiplicando=1;$multiplicando<=10;$multiplicando++){
            echo "<td>";
                for($miltiplicador=1;$miltiplicador<=10;$miltiplicador++){
                    echo "Si $multiplicando X $miltiplicador = ".$multiplicando*$miltiplicador."<hr>";
                }
            echo "</td>";
        }
    echo "</tr>"; // cierro fila 2, donde van a a estar en si las tablas de multiplicar


echo "</table>";

?>