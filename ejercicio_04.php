<?php

function splitTheBill($list =[]){
  $input = $list;
  $suma = 0;
  foreach ($input as $value) {
    $suma +=$value;
  }
  $MEDIA = $suma/count($input);
  foreach ($input as $key => &$value) {
    $value = round($value-$MEDIA);
  }
  unset($value);
  return $input;
}


$group = [
  'A'=>20,
  'B'=>15,
  'C'=>10
];

print_r(splitTheBill($group));