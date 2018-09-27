<!doctype html>
<html>
<meta charset="utf-8">
<head>
	<title>Página documento tres</title>
	<style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
		body{
			text-align:center;
            font-family: 'Gloria Hallelujah', cursive;
            background-color:rgba(102,153,153,1);
            color:white;
		}

        p{
            margin-left:10%;
            margin-right:10%;
            box-shadow:5px solid black;
            
        }
	
	 </style>
    </head>

<body>
    <?php
    
    function dameDatos(){
        $nombre="Bernabé <br>";
        $apellidos="García Sánchez <br>";
        $direccion="Calle Santa Infancia 3, 4º2 <br>";
        $telefono= 690314464;
        echo $nombre."".$apellidos."".$direccion."".$telefono."<br>"."ha ganado el primer premio";
    }

    
   
    

?>
    
</body>

</html>