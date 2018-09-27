<!doctype html>
<html>
<meta charset="utf-8">

<head>
    <title>Funciones, Parámetros por Referencia</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
        @import url('https://fonts.googleapis.com/css?family=VT323');
        body {
            text-align: center;
            font-family: 'Gloria Hallelujah', cursive;
            background-color: rgba(102, 153, 153, 1);
            color: white;
           
        }

        main{
            width:70%;
            margin-left:15%;
            margin-right:15%;
            margin-top:15%;
        }
        

        table{
           
            text-align:center;
            font-family: 'VT323', monospace;
            font-size:30px;
        }
    </style>
</head>

<body>
    <main>
<?php
/*
Si la condición no se cumple, con el bucle while saldríamos del bucle 
sin ejecutarse la instrucción, mientras que con do while se 
ejecuta al menos una vez la instrucción

*/
$var1=7;
do{
    echo "estamos ejecutando el código del bucle <br>";
    $var1++;
    
}while($var1<6);
echo "Ya hemos salido del bucle";

?>

    </main>
</body>

</html>