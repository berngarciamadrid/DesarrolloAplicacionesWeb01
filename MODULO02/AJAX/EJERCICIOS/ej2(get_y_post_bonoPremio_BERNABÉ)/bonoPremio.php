<?php

$num_bono="472";//requisito uno para el premio
$dia_compra="jueves";//requisito dos para el premio
$dia=$_GET["diacompra"];//valor que mete el usuario en el formulario
$resultadouno=strcasecmp($dia_compra,$dia);//dia que mete el usuario pero con la funcion str que permita meterlo en may y min

$el_bono=$_GET['numbono'] ;//valor que mete el usuario en cuadro bono


if ($el_bono==$num_bono && $dia_compra==$resultadouno) {
  echo 'premio';
} else {
  echo 'ajo';
}



?>