<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Validar Dos Super Globales</title>
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
    if(isset($_POST["enviando"])){
        $usuario=$_POST["nombre_usuario"];
        $edad=$_POST["edad_usuario"];
        $usertwo="juan";
        if($edad>=18){
            echo "<p>Puedes entrar</p>";
        }else{
            echo "<p>No Puedes entrar</p>";
            }
        }
        $resultado=strcasecmp( $usuario,$usertwo);

        echo "El resultado es: ".$resultado."<br>";
        if($resultado=="0"){
            echo "Son iguales";
        }else{
            echo "Son diferentes";
        }

?>
   
    
</body>

</html>