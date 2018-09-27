<!doctype html>
<html>
<meta charset="utf-8">

<head>
    <title>Agencia de Viajes HTML</title>
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

function frase_mayus($frase,$conversion=true){
    $frase=strtolower($frase);
    if($conversion==true){
        $resultado=ucwords($frase);
    }else{
        $resultado=strtoupper($frase);
    }
    return $resultado;


}

echo (frase_mayus("esto es una prueba"));



?>

</body>

</html>