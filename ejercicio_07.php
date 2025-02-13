<?php

function classifyFoto($arr = [])
{
  function ordenateBuble($arrInt = [])
  {
    $output = $arrInt;
    $last = count($output) - 1;
    for ($i = 1; $i <= $last; $i++) {
      if ($output[$i - 1] > $output[$i]) {
        $mayor = $output[$i - 1];
        $menor = $output[$i];
        $output[$i - 1] = $menor;
        $output[$i] = $mayor;
      }
      if ($i === $last) {
        $i = 0;
        $last--;
      }
    }
    return $output;
  }
  $input = str_replace("img", "", $arr);
  $input = ordenateBuble($input);
  $output = str_replace(".", ".img", $input);
  return $output;
}

$memory = ["2016.img1", "2016.img2", "2015.img3", "2016.img4", "2013.img5", "2013.img12"];


echo "\n";
print_r(classifyFoto($memory));
echo "\n";
