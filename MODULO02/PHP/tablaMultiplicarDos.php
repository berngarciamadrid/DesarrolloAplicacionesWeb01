<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Tabla de Multiplicar 2 Var Estática</title>
	<style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
		body{
			text-align:center;
            font-family: 'Gloria Hallelujah', cursive;
            background-color:rgba(102,153,153,1);
            color:white;
		}

        p{
            font-size:20px;
        }

      
	
	 </style>
    </head>

<body>


<?php
    function multiplicarDos(){
        static $contador=0;
        $contador++;
        $resultado=2*$contador;
        echo "<p>Término: ".$resultado."<br></p>";
    }
    echo "<h1>La tabla de multiplicar del dos: <h1>";
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
    multiplicarDos();
?>
   
    
</body>

</html>