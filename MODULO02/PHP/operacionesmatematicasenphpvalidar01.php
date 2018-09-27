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
$resul=$_POST["resultado"];

calcular($operacion);

function calcular($operations){
    global $primer_numero;
    global $segundo_numero;
    global $resul;
    
    if($resul){
        

if(!strcmp("Suma",$operations)){
	echo "El resultado es: ".($primer_numero+$segundo_numero);
}

if(!strcmp("Resta",$operations)){
	echo "El resultado es: ".($primer_numero-$segundo_numero);
}

if(!strcmp("Multiplicacion",$operations)){
	echo "El resultado es: ".($primer_numero*$segundo_numero);
}

if(!strcmp("Division",$operations)){
	echo "El resultado es: ".($primer_numero/$segundo_numero);
}

if(!strcmp("Modulo",$operations)){
	echo "El resultado es: ".($primer_numero%$segundo_numero);
}

if(!strcmp("Incremento",$operations)){
    $primer_numero++;
	echo "El resultado es: ".($primer_numero);
}

if(!strcmp("Decremento",$operations)){
    $primer_numero--;
	echo "El resultado es: ".($primer_numero);
}

}

}



?>
    
</body>

</html>
