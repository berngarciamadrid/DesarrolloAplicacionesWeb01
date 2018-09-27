<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
include("vehiculos.php");
$mazda=new Coche();
$pegaso=new Camion();
echo "El Mazda tiene ".$mazda->ruedas . " ruedas<br>";

echo "El Pegaso tiene ".$pegaso->ruedas . " ruedas<br>";

/*$pegaso->frenar();
$pegaso->establece_color("Pegaso","gris");
$mazda->establece_color("Mazda","Amarillo");
$pegaso->arrancar();*/
$mazda->arrancar();
?>
</body>
</html>
