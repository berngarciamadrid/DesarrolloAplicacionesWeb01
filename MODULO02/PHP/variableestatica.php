<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Variable Estática</title>
	<style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
		body{
			text-align:center;
            font-family: 'Gloria Hallelujah', cursive;
            background-color:rgba(102,153,153,1);
            color:white;
		}

      
	
	 </style>
    </head>

<body>


<?php
    function incremento(){
        static $contador=0;
        $contador++;
        echo $contador."<br>";
    }
    incremento();
    incremento();
    incremento();
    incremento();
    incremento();
    incremento();
    incremento();
    incremento();
    incremento();
?>
   
    
</body>

</html>