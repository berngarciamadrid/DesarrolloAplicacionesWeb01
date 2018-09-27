<!doctype html>
<html>
<meta charset="utf-8">

<head>
    <title>funciones, parámetros por referencia</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
        body {
            text-align: center;
            font-family: 'Gloria Hallelujah', cursive;
            background-color: rgba(102, 153, 153, 1);
            color: white;
        }
        
        p {
            font-size: 20px;
        }
    </style>
</head>

<body>
<?php

function incrementa($valor1){
    $valor1++;

    return $valor1;
}
/*return saca el valor fuera de la función */

echo incrementa(5);


?>

</body>

</html>