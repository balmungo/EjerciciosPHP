<?php

function miniNumber($list = []):int{
$input = $list;
$output = 0;
$suma = 0;
foreach ($input as $value) {
  $suma +=$value;
}
while (true) {
  if($suma%2===0||$suma%3===0||$suma%5===0){
    $output++;
    $suma++;
  }else{
    break;
  }
}
return $output;
}

print_r(miniNumber([3,1,2]));
echo "\n";
print_r(miniNumber([2,12,8,4,6]));
echo "\n";
print_r(miniNumber([50,39,49,6,17,28]));
echo "\n";


