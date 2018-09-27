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
          
          
        
      
    </style>
  
</head>

<body>
    
    
        <?php

        Class Humano{
            
            var $nariz;
            var $boca;
            var $ojos;

            function Humano(){
               $this->nariz=1;
               $this->boca=1;
               $this->ojos=2; 
                                
                            }

            function comer(){

                echo "Estoy poniéndome las botas(no es literal, eh, estoy comiendo)<br><br>";
            }

            function dormir(){
                echo "Como mi poema favorito de Marina Tsvetaeva: 'Déjame dormir'<br><br>";
            }

            function correr(){
                echo "Me gusta hacer footing todos los días<br><br>";
            }

            function establece_carac($tipo_nariz,$color_ojos){
                $this->nariz=$tipo_nariz;
                $this->ojitos=$color_ojos;
                echo "Este humano tiene la nariz:  ".$this->nariz. " y unos ojos: ".$this->ojitos . "<br>";
            }


        }

        Class Mamiferos extends Humano{


            function Mamiferos(){ // constructor
               $this->brazos="";
               $this->patas=4;
               $this->ojos=2;        
                } 

            function establece_carac($num_patas,$col_ojos){
                $this->patitas=$num_patas;
                $this->numojos=$col_ojos;
                echo "Este animal tiene este número de patas:  ".$this->patitas. " y su color de ojos: ".$this->numojos . "<br>";
                }

                function dormir(){
                    parent::dormir();
                    echo "A mimir, (ronquidos)<br>";
                }

            
        }

        ?>
    

    

</body>

</html>