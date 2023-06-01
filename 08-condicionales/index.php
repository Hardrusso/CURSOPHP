<?php

/*
// CONDICIONAL IF:

if(condicion){
    instrucciones
}else{
    otras instrucciones
}

// OPERADORES DE COMPARACION

==   es Igual
===  es Identico
!=   es Diferente
<>   es Diferente
!==  No Identico
<    Menor que
>    Mayor que
<=   Menor o igual que
>=   Mayor o igual que

// OPERADORES LOGICOS

&& AND Y
|| OR O
! NOT NO
and, or

*/
// Ejemplo 1
$color =  "verde";

if($color=="rojo"){
    echo "EL COLOR ES ROJO".'</br>';
}else{
    echo "El color no es rojo".'</br>';
}

// Ejemplo 2
$year = 2019;
if($year >= 2019){
    echo "Estamos en 2019 en adelante".'</br>';
}else{
    echo "Es un año anterior 2019".'</br>';
}

//Ejemplo 3

$nombre = 'Laura DB';
$ciudad = 'Madrid';
$continente = 'america';
$edad = 17;
$mayoria_edad = 18;


if($edad>=$mayoria_edad){
    echo '<h1>'.$nombre." ES MAYOR DE EDAD".'</h1>'.'</hr>';
    if ($continente=="Europa"){
    echo "<h1> y vive en la ciudad $ciudad ";
    } else{
        echo "<h1> y no vive en el continente Europeo";
    }

}else{
    echo "<h1>$nombre ES MENOR DE EDAD </h1><hr>";
}

//Ejemplo 4

$dia = 6;
if($dia==1){
    echo "Es Lunes";
}else{
    if($dia==2){
        echo "Es Martes";
    }else{
        if($dia==3){
            echo "Es Miercoles";
        }else{
            if($dia==4){
                echo "Es Jueves";
            }else{
                if($dia==5){
                    echo "Es Viernes";
                }else{
                    if($dia==6){
                        echo "Es Sabado";
                    }else{
                        if($dia==7){
                            echo "Es Domingo";
                        }else{
                            echo "No es un día de la semana";
                        }
                    }
                }
            }
        }
    }
}
echo '<hr>';
if($dia==1){
    echo "LUNES";
}elseif($dia==2){
    echo "MARTES";
}elseif($dia==3){
    echo "MIERCOLES";
}elseif($dia==4){
    echo "JUEVES";
}elseif($dia==5){
    echo "VIERNES";
}elseif($dia==6){
    echo "SABADO";
}elseif($dia==7){
    echo "DOMINGO";
}else{
    echo "No es un dia de la semana";
}
echo '<hr>';

//$dia =9;

switch($dia){
    case 1: 
        echo "ES LUNES";
        break;
    case 2: 
        echo "ES MARTES";
        break;
    case 3: 
        echo "ES MIERCOLES";
        break;
    case 4: 
        echo "ES JUEVES";
        break;
    case 5: 
        echo "ES VIERNES";
        break;
    case 6: 
        echo "ES SABADO";
        break;
    case 7: 
        echo "ES DOMINGO";
        break;
    default:
        echo  "No es un dia de la semana";    
}




// EJEMPLO 5
echo '<hr>';

$edad1= 18;
$edad2= 64;
$edad_oficial = 64;

if($edad_oficial>=$edad1 && $edad_oficial<=$edad2 ){
    echo "ESTA EN EDAD DE TRABAJAR";
}else{
    echo "No esta en edad de trabajar";
}

echo '<hr>';
$pais ='Mexico';

if($pais=="Mexico"||$pais=="Colombia"||$pais=="España"){
    echo "Se habla español";
}else{
    echo "NO se Habla Español";
}


// GOTO IR A

goto marca;

echo "<h3>instrucion 1</h3>";
echo "<h3>instrucion 2</h3>";
echo "<h3>instrucion 3</h3>";
echo "<h3>instrucion 4</h3>";
echo "<h3>instrucion 5</h3>";
echo "<h3>instrucion 6</h3>";
echo "<h3>instrucion 7</h3>";

marca:
echo "<h1>me he saltado 7 echos</h1>"

?>