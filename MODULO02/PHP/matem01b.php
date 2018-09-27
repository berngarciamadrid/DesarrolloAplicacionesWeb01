<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Constantes de este País</title>
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
define ("NUMBERONE", 9, true);
define ("NUMBERTWO", 3, true);
define ("NUMBERTHREE", 5, true);

$suma=NUMBERONE+NUMBERTWO;
$resta=NUMBERONE-NUMBERTWO;
$multiplicacion=$suma*$resta;
$final=$multiplicacion+1;
echo $final; 

?>
    
</body>

</html>