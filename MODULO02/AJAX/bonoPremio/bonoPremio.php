<?php

$num_bono="472";
$dia_compra="jueves";
strtoupper($dia_compra);

$el_bono=isset($_GET['numbono']) ? $_GET['numbono'] : $_POST['numbono'];
$la_compra=isset($_GET['diacompra']) ? $_GET['diacompra'] : $_POST['diacompra'];

if ($el_bono==$num_bono && $la_compra==$dia_compra) {
  echo 'bonodeudos';
} else {
  echo 'noautorizado';
}



?>