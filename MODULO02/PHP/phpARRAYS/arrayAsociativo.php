<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>POO PHP 04</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Spectral+SC:400,500i,700');
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500');
        body {
            background-color: black;
            font-family: 'Quicksand', sans-serif;
            opacity: 0.8;
            color:white;
        }

        main{
            background-color:crimson !important;
            margin-left:30% !important;
            margin-right:30% !important;
            margin-top:20%;
        }
        
      
    </style>
  
</head>

<body>
     <main>
     <?php
        $semana[]="Lunes";
        $semana[]="Martess";
        $semana[]="Miércoles";
        $semana[]="Jueves";
        $semana[]="Viernes";
        $semana[]="Sábado";
        $semana[]="Domingo";
        /*$semana=array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado","Domingo"); */
        echo $semana[2]; // Muestra el elemento del índice, en este caso el tercer elemento,que es [2]
        $animales = ["Muffinhead" => 14,"Peter" => 4,"Monnie" => 7,"Banh" => 10];
        echo "<br><br>";
        echo $animales["Muffinhead"] . PHP_EOL; // Devuelve 14
        echo "<br>";
        echo $animales["Monnie"] . PHP_EOL; // Devuelve 7
        $datos=array("Nombre"=>"Juan", "Apellido"=>"Gómez", "Edad"=>"21");
        echo "<br><br>";
        echo $datos["Apellido"];
        echo "<br><br>";

        for($i=0;$i<count($semana);$i++){
            echo $semana[$i]."<br>";
        }

        if (is_array($datos)){
            echo "Es un array";
        }else {
            echo "No te das CuÍn que no es un array";
        }

        echo "<br><br>";

        foreach($datos as $clave=>$valor){
            echo "A $clave le corresponde $valor <br><br>";
        }

  
      ?>
        <main>


</body>

</html>