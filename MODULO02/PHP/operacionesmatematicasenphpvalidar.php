<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Primer Formulario PHP</title>
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
$primer_numero=$_POST["num1"];
$segundo_numero=$_POST["num2"];
$operacion=$_POST["op"];

if(!strcmp("Suma",$operacion)){
	echo "El resultado es: ".($primer_numero+$segundo_numero);
}

if(!strcmp("Resta",$operacion)){
	echo "El resultado es: ".($primer_numero-$segundo_numero);
}

if(!strcmp("Multiplicacion",$operacion)){
	echo "El resultado es: ".($primer_numero*$segundo_numero);
}

if(!strcmp("Division",$operacion)){
	echo "El resultado es: ".($primer_numero/$segundo_numero);
}

if(!strcmp("Modulo",$operacion)){
	echo "El resultado es: ".($primer_numero%$segundo_numero);
}



?>
    
</body>

</html>


