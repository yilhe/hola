<?php
  $codigo = $_POST['Codigo'];
  $capital = $_POST['Capital'];
  $dia = $_POST['Dia'];
  $tasaI = $_POST['tin'];
  $k=($capital*$tasaI)/100;
  $interes=$k*(360-$dia)/360;
  echo 'interes: '. $interes;
?>