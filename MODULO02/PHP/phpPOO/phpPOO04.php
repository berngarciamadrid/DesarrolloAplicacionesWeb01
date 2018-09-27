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
     include("humanosAnimales.php");
     $rebeca=new Humano();
     $shiba=new Mamiferos();
     echo "Rebeca tiene: ".$rebeca->boca." boca y shiba tiene: ".$shiba->patas." patas<br>";
     $shiba->comer();
     $shiba->dormir();
     $rebeca->correr();
     $shiba->establece_carac("4","Marrones");
     $rebeca->establece_carac("Normal","Marrones");  
     
     
  
      ?>
        <main>


</body>

</html>