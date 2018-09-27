<!doctype html>
<html>
<meta charset="utf-8">

<head>
    <title>Formulario 13 Nov 2017 PHP</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah');
        body {
            text-align: center;
            font-family: 'Gloria Hallelujah', cursive;
            background-color: rgba(102, 153, 153, 1);
            color: white;
        }
        
        main {
            margin-top: 5%;
        }
    </style>
</head>

<body>
    <main>
        <?php
        if(isset($_POST["enviar"])){
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $edad=$_POST["edad"];
        echo "Nombre:" .$nombre."<br> "."Apellidos: ".$apellidos."<br>"."Edad: ".$edad;
        }
        ?>

    </main>
   
    
</body>

</html>