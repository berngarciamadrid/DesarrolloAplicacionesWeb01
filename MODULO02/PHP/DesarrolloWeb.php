<!doctype html>
<html>
<meta charset="utf-8">

<head>
    <title>Desarrollo de Aplicaciones con Tecnologias Web PHP</title>
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
        p{

        }
    </style>
</head>

<body>
    <main>
        <?php
        $curso="Desarrollo de Aplicaciones con Tecnologías Web";

        function datosCurso(){
            global $fecha;
            $fecha="6 de Febrero de 2018";
            global $empresa;
             $empresa="FORMAD";
           
        }
        datosCurso();
        echo "<p>El curso con nombre: ".$curso.", de la empresa: ".$empresa." , finaliza el: ".$fecha. " </p>"
        
        ?>

    </main>
   
    
</body>

</html>