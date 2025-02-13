<?php

function reverse_by_center($word):?string{
$input = $word;
$output = "";
$midle = 0;
$SIZE = strlen($input);

if($SIZE % 2 === 0){
  $midle = $SIZE / 2;
  $output = substr($input,$midle).substr($input,0,$midle);
}else{
  $midle = ($SIZE+1)/2;
  $output = substr($input,$midle).$input[$midle-1].substr($input,0,$midle-1);
}

return $output;
}


printf(reverse_by_center("secretos"));
echo"\n";
printf(reverse_by_center("agentes"));
echo"\n";

