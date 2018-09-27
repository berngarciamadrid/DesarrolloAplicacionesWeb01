<?php

$num_premiado="472";
$dia_premiado="Jueves";

$numbono=isset($_GET['num_bono']) ? $_GET['num_bono'] : $_POST['num_bono'];
$diasemana=isset($_GET['dia_semana']) ? $_GET['dia_semana'] : $_POST['dia_semana'];

if ($numbono==$num_premiado && $diasemana==$dia_premiado) {
  echo 'autorizado';
} else {
  echo 'fallo';
}



?>