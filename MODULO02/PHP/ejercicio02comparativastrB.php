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
    $nombredos="CASA";
    $resultado=strcmp($nombreuno,$nombredos);


    echo "El resultado es: ".$resultado;

?>
    
</body>

</html>