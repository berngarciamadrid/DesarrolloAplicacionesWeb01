<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio Plugin Fancy Box</title>
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
        }
        
      
    </style>
  
</head>

<body>
     <main>
     <?php
     include("vehiculos.php");
     $mazda=new Coche();
     $pegaso=new Camion();
     echo "El mazda tiene: ".$mazda->ruedas." ruedas y el pegaso tiene: ".$pegaso->ruedas." ruedas<br>";
     ?>
        <main>


</body>

</html>