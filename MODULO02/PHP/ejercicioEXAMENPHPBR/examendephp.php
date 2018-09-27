<!DOCTYPE HTML>
<html>
<head>
    <title>
    Respuesta en PHP
</title>
<style>
        @import url('https://fonts.googleapis.com/css?family=Spectral+SC');
        p {
            font-family: 'Spectral SC', serif;
        }
        
        body {
            background-color: brown;
            font-family: 'Spectral SC', serif;
            color:white;
        }
        
        main {
            margin-left: 20%;
            margin-top: 10%;
        }
    </style>
</head>

<body>
    <main>
<?php

$contra_entrar="1234";
$usu_entrar="CORE";

$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];
$la_contra=isset($_GET['contras']) ? $_GET['contras'] : $_POST['contras'];

if ($el_usuario==$usu_entrar && $la_contra==$contra_entrar) {
  echo 'correcto, puedes acceder';
} else {
  echo 'lo siento, no puedes acceder';
}



?>

</main>
</body>
</html>