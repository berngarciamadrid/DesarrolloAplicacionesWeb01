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
        
        p{
           
            text-align:center;
            font-family: 'VT323', monospace;
            font-size:30px;
        }
    </style>
</head>

<body>
    <main>
<?php
for($i=10;$i>=-10;$i--){
    if($i==0){
        echo "Esta división no puede hacerse";
        continue;
    }
    
    echo "<p> 9 / $i = ". 9/$i . "<br>";
    
    }
    echo "<br>";
    echo "Hemos salido del bucle</p>";

?>

    </main>
</body>

</html>