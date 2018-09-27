<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Página documento tres</title>
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
    $nombreuno="CASA";
    $nombredos="Casa";
    $resultado=strcasecmp($nombreuno,$nombredos);
    /* strcmp obliga a que las dos palabras sean exactamente iguales.
    strcasecmp las dos palabras permite que sean iguales pero con
    mayúsculas o minúsculas distintas.
    
    
    */

    echo "El resultado es: ".$resultado."<br>";
    if($resultado=="0"){
        echo "Son iguales";
    }else{
        echo "Son diferentes";
    }

?>
    
</body>

</html>