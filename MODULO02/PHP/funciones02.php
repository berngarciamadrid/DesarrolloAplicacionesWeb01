<!doctype html>
<html>
<meta charset="utf-8">

<head>
    <title>Funciones, Parámetros por Referencia</title>
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
$param="HOLA MUNDO";
function cambia_mayus($param){
    $param=strtolower($param);
    $param=ucwords($param);
    return $param;
}
    echo $param;
?>

</body>

</html>