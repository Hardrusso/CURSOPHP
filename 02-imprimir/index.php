<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - Master PHP</title>
</head>
<body>
    <h1>Master PHP - Jonathan Caro</h1>

    <?= 'Bienvenido al curso mas grande de PHP'?>

    <?php
        //Titular de la sección
        echo    '<h3>Listado de videojuegos:</h3>';
        echo    '<ul>'
                    /*Esta es una linea 
                    de videojuegos
                    moderno*/
                . '<li>GTA</li>'
                . '<li>FIFA</li>'
                . '<li>NFS</li>'
                . '<li>MINCRAFT</li>'
                . '<li>FREEFIRE</li>'
                .'</ul>';
        
       // echo '<br>HOLA HOLA HOLA</br>';

        // Parrafo explicativo
        echo '<p> Esta es toda'.' - '.'lista de juegos </p>';
    ?>

</body>
</html>


