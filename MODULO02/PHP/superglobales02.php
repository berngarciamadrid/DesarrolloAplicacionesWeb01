<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Formulario con Super Globales</title>
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
<form method="post" action="validardos.php">
    <label for="nombre_usuario">Dime tu nombre:</label><input type="text" name="nombre_usuario" id="nombre_usuario"><br>
    <label for="edad_usuario">Dime tu edad:</label><input type="text" name="edad_usuario" id="edad_usuario"><br>
        <input type="submit" value="Validar" id="enviando" name="enviando">
</form>
  
    
</body>

</html>