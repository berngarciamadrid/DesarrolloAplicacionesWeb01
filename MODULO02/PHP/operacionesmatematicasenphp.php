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
			background-image:url('mathoperations.png');
		}

		form{
			margin-left:20%;
			margin-right:20%;
			background-color:rgba(102,153,153,1);
			color:black;
			font-weight:bold;
			opacity:0.9;
			top:100px;
			position:relative;
			border: 2px solid;
    		border-radius: 25px;
			
		}
      
	
	 </style>
    </head>

<body>
<form name="form1" method="post" action="operacionesmatematicasenphpvalidar.php">

	<legend>Operaciones Matemáticas</legend>
<label for="num1">Primer número</label>
<input type="text" name="num1"><br>
<label for="num2">Segundo número</label>
<input type="text" name="num2"><br>
<label for="">Operacion</label>
<select name="op" id="">
	<option value="Suma">Suma</option>
	<option value="Resta">Resta</option>
	<option value="Multiplicacion">Multiplicacion</option>
	<option value="Division">Division</option>
	<option value="Modulo">Modulo</option>
</select><br>
<input type="submit" name="resultado" value="Enviar">

</form>

    
</body>

</html>