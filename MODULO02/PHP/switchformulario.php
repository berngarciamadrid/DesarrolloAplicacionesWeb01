<!doctype html>
<html>
<meta charset="utf-8">

<head>
    <title>Funciones, Parámetros por Referencia</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
        @import url('https://fonts.googleapis.com/css?family=VT323');
        body {
            text-align: center;
            font-family: 'Gloria Hallelujah', cursive;
            background-color: rgba(102, 153, 153, 1);
            color: white;
            background-image:url('gameboyadventuretime.jpg');
        }

        main{
            width:70%;
            margin-left:15%;
            margin-right:15%;
            margin-top:15%;
        }
        

        table{
           
            text-align:center;
            font-family: 'VT323', monospace;
            font-size:30px;
        }
    </style>
</head>

<body>
    <main>
<form action="validacioncondicionales.php" method="post" name="datos_usuario" id="datos">
<table>
    <tr><td><label for="nombre_usuario">Nombre:</label></td><td><input type="text" name="nombre_usuario" id="nombre_usuario"></td></tr>
    <tr><td><label for="contra_usuario">Contraseña:</label></td><td><input type="password" name="contra_usuario" id="contra_usuario"></td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><input type="submit" id="enviando" name="enviando"></td></tr>





</table>



</form>
    </main>
</body>

</html>