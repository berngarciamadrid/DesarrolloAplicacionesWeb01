<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Función y Nombre PHP</title>
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
    $nombre="juan";
    function dameNombre(){
        global $nombre;
        echo $nombre;
    }
    dameNombre();
?>
   
    
</body>

</html>