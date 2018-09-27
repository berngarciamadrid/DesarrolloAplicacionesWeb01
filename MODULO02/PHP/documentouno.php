<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Página documento uno</title>
	<style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
		p{
			text-align:center;
            font-family: 'Gloria Hallelujah', cursive;
		}
	
	 </style>
    </head>

<body>
	<?php
	echo "<p>Página Documento Uno</p>";
    /*echo sirve para poner en pantalla un mensaje o código HTML */
    $nombre;
	$nombre="Bernabé";
	$edad=33;
	print "<p>";
	print $nombre;
	print "<br>";
	print $edad;
	print "</p>";
	print"<p>";
	print "El ganador ha sido:"." ".$nombre;
	echo "<br>";
	echo $nombre,$edad;
	
	


?>
    
</body>

</html>