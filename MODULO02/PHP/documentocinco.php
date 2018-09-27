<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Página documento tres</title>
	<style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
		section{
			text-align:center;
            font-family: 'Gloria Hallelujah', cursive;
            border: 2px solid red;
		}
        p{
            text-align:center;
            font-family: 'Gloria Hallelujah', cursive; 
            margin-left:10%;
            margin-right:10%;
            margin-top:10%;
            box-shadow: 5px solid black; 
        }
	
	 </style>
    </head>

<body>
	<?php
    echo "<p>Concurso Web: <br>";
    include ("documentoseis.php");
    dameDatos();
    echo "<br>Enhorabuena</p><br>";
?>
    
</body>

</html>