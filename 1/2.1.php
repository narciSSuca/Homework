<?php
  $qwe= array();
  for ($i=0; $i < 51 ; $i++) {
    $qwe[] = rand(0, 9999999999);
  }

  $MinNum = min($qwe);
  $MaxNum = max($qwe);
  $AvgNum = array_sum($qwe)/count($qwe);

  echo $MinNum. '<br>';
  echo $MaxNum. '<br>';
  echo $AvgNum. '<br>';
