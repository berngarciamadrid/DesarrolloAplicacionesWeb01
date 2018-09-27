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
    /*
        ==igual que
        ===igual que y el mismo tipo de dato
        != diferente
        <>
        Precedencia de operadores
Asociatividad	Operadores	Información adicional
no asociativo	clone new	clone and new
izquierda	[	array()
derecha	**	aritmética
derecha	++ -- ~ (int) (float) (string) (array) (object) (bool) @	tipos e incremento/decremento
no asociativo	instanceof	tipos
derecha	!	lógico
izquierda	* / %	aritmética
izquierda	+ - .	aritmética y string
izquierda	<< >>	bit a bit
no asociativo	< <= > >=	comparación
no asociativo	== != === !== <> <=>	comparación
izquierda	&	bit a bit y referencias
izquierda	^	bit a bit
izquierda	|	bit a bit
izquierda	&&	lógico
izquierda	||	lógico
derecha	??	comparación
izquierda	? :	ternario
derecha	= += -= *= **= /= .= %= &= |= ^= <<= >>=	asignación
izquierda	and	lógico
izquierda	xor	lógico
izquierda	or	lógico




    */

    $variable1="8";
    $variable2=8;
    $variable3="Juan";

    if($variable1 == $variable2){
        echo "La condición 1(==): Son iguales <br>";
    }else{
        echo "La condición 1(==): Son diferentes<br>";
    }

    if($variable1 === $variable2){
        echo "La condición 2(===): Son iguales<br>";
    }else{
        echo "La condición 2(===): Son diferentes<br>";
    }

    if($variable1 != $variable2){
        echo "La condición 3(!=): Son diferentes <br>";
    }else{
        echo "La condición 3(!=): Son iguales<br>";
    }

    if($variable1 <> $variable2){
        echo "La condición 3(<>): Son iguales <br>";
    }else{
        echo "La condición 3(<>): Son diferentes<br>";
    }
?>
   
    
</body>

</html>