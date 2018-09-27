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
            background-image:url('gameboyadventuretime.jpg');
        
        }

        main{
            width:70%;
            margin-left:15%;
            margin-right:15%;
            margin-top:5%;
            font-family: 'VT323', monospace;
            
        }
        

        p{
           
            text-align:center;
            position:absolute;
            top:300px;
            left:300px;
            font-size:30px;
        }
    </style>
</head>

<body>
    <main>
<?php
    $contra=$_POST["contra_usuario"];
    $nombre=$_POST["nombre_usuario"];
    switch($nombre){
        case "Juan":
        echo "<p>Usuario autorizado. Hola Juan</p>";
        break;

        case "María":
        echo "<p>Usuario autorizado. Hola María</p>";
        break;

        case "Pedro":
        echo "<p>Usuario autorizado. Hola pedro</p>";
        break;

        default:
        echo "<p>Usuario no autorizado</p>";
    }



?>
    </main>
</body>

</html>