<?php
class Coche{
	var $ruedas;
	var $color;
	var $motor;
function Coche(){//constructor
		$this->ruedas=4;
		$this->color="";
		$this->motor=1600;
		}
	
function arrancar(){
		echo "Estoy arrancando <br>";
		}
function girar(){
		echo "Estoy girando <br>";
		}
function frenar(){
		echo "Estoy frenado <br>";
		}
function establece_color($modelo_coche,$color_coche){
	$this->color=$color_coche;
	$this->modelo=$modelo_coche;
	echo "El color de el modelo ".$this->modelo ."  es: ".$this->color . "<br>";}
	
	}

class Camion extends Coche{

function Camion(){//constructor
		$this->ruedas=8;
		$this->color="gris";
		$this->motor=2600;
		}
	

function establece_color($nombre_camion,$color_camion){
	$this->color=$color_camion;
	$this->nombre=$nombre_camion;
	echo "El color del ".$this->nombre ."  es: ".$this->color . "<br>";}
	
function arrancar(){
	parent::arrancar();
	echo "Camión arrancado";}}

 
?>
