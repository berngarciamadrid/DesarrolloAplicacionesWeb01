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
<form method="post" action="unformulariophpsolucionB.php">
<label for="usuario1">Escribe el usuario exactamente igual que lo registraste:</label> 
  <input type="text" name="usuario1" placeholder="Escribe tu usuario"> 
  <br>
  <label for="usuario2">Escribe el nombre del usuario exactamente igual:</label> 
  <input type="text" name="usuario2" placeholder="Escribe tu usuario"> 
  <br>
  <input type="submit" name="enviaruno" value="opcionuno"> 
  <br>
  <input type="submit" name="enviardos" value="opciondos"> 

</form>

    
</body>

</html>