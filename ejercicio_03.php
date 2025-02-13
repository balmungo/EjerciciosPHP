<?php

function grabDoll($dolls = []){
$input = $dolls;
$output = [];
$list = ["hello kitty","barbie doll"];
for ($i=0; $i < count($input); $i++) { 
  if(!in_array($input[$i],$list)){
    continue;
  }
  if(count($output)===3){
    break;
  }
  array_push($output,$input[$i]);
}
return $output;
}

$bag = ["hello kitty","es vacio","hello kitty","es vacio", "barbie doll","es vacio","es vacio"];
var_dump(grabDoll($bag));


