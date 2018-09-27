<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Agencia de Viajes PHP</title>
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
<!--<label for="dia">Día en número y Mes(p.ej. : 13noviembre:<input type="text" name="dia"><br>
<label for="edad">Por favor, si es tan amable, escriba su edad(p.ej: 33)<input type="text" name="edad"><br>
<input type="submit" value="Enviar" name="enviando">-->
<?php
    if(isset($_POST["enviando"])){
    $dia=$_POST["dia"];
    $edad=$_POST["edad"];
    $precio;
        if($dia=="13noviembre" and $edad>50){
            $precio=600*0.50;
        }else if($dia=="13noviembre" and $edad<15){
            $precio=0;
        }else{
            $precio=600;
        }
    }
    echo "<p> El viaje de 5 días a Benidorm le cuesta: ".$precio. "€";
    
    
?>
   
    
</body>

</html>