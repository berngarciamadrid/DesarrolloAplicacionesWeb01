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

$nombre_registro="carmen";
$nombre_usuariouno=$_POST["usuario1"];
$nombre_usuariodos=$_POST["usuario2"];
$resultadouno=strcasecmp($nombre_registro,$nombre_usuariouno);
if(isset($_POST["enviaruno"])){
    if($resultadouno==0){
        echo "Usuario correcto <br>";
        
    }else{
        echo "Acuérdate de ponerlo en minúsculas <br>";
    }


}

$resultadodos=strcmp($nombre_registro,$nombre_usuariodos);
if(isset($_POST["enviardos"])){
    if($resultadodos==0){
        echo "Usuario correcto <br>";
        
    }else{
        echo "Acuérdate de ponerlo en minúsculas <br>";
    }

}




?>

    
</body>

</html>