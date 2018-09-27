<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Página documento dos</title>
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
	echo "<p>Página Documento Dos</p>";
    /*echo sirve para poner en pantalla un mensaje o código HTML */
    $nombre;
	$nombre="Bernabé";
    $edad=33;
        
        function dameDatos(){
            echo "Estoy dentro la función <br>";

        }
    
        dameDatos();
      


?>
    
</body>

</html>