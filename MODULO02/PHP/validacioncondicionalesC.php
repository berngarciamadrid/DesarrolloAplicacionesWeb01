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
            font-size:40px;
            
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
   $edad=$_POST["edad_usuario"];
   switch(true){
       case $edad<18:
       echo "eres menor de edad";
       break;

       case $edad<=40 && $edad>=18;
       echo "eres un Madurescente";
       break;

       case $edad<=65 && $edad>40;
       echo "Eres un viejoven";
       break;

       default:
       echo "Vives más que Eduardo Punset";
   }



?>
    </main>
</body>

</html>