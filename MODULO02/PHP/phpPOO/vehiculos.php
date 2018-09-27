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
           main {
            margin-left: 20%;
            margin-right: 30%;
            font-family: 'Quicksand', sans-serif;
            background-color: grey;
            height: 500px;
            padding-left: 10%;
            padding-top: 5%;
        } 
        
      
    </style>
  
</head>

<body>
    
    <main>
        <?php

        Class Coche{
            
            var $ruedas;
            var $color;
            var $motor;

            function Coche(){
               $this->ruedas=4;
               $this->color="";
               $this->motor=1600; 
                                
                            }

            function arrancar(){

                echo "estoy arrancando<br><br>";
            }

            function girar(){
                echo "estoy girando<br><br>";
            }

            function frenar(){
                echo "estoy frenando<br><br>";
            }

            function establece_color($modelo_coche,$color_coche){
                $this->modelo=$modelo_coche;
                $this->color=$color_coche;
                echo "El modelo de coche es ".$this->modelo. " y el color de este coche es: ".$this->color . "<br>";
            }


        }

        Class Camion{
            
            var $ruedas;
            var $color;
            var $motor;

            function Camion(){
               $this->ruedas=8;
               $this->color="gris";
               $this->motor=2600; 
                                
                            }

            function arrancar(){

                echo "estoy arrancando<br><br>";
            }

            function girar(){
                echo "estoy girando<br><br>";
            }

            function frenar(){
                echo "estoy frenando<br><br>";
            }
        }
 

        ?>
    

    </main>

</body>

</html>