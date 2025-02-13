<?php

function resumirRangos($rango = [])
{
  $intput = $rango;
  $out = [];
  $inicio = $intput[0];
  $fin = $intput[0];
  for ($i = 1; $i < count($intput); $i++) {
    $dif = $intput[$i] - $intput[$i - 1];
    //consecutivo
    if ($dif === 1) {
      $fin = $intput[$i];
      continue;
    }
    //repetido
    if ($dif === 0) {
      continue;
    }
    //no consecutivo
    if ($dif > 1) {
      $inicio === $fin
        ? array_push($out, "$inicio")
        : array_push($out, "$inicio->$fin");
      $inicio = $intput[$i];
      $fin = $intput[$i];
      continue;
    }
  }
  $inicio === $fin
    ? array_push($out, "$inicio")
    : array_push($out, "$inicio->$fin");

  return $out;
}

echo "\n";
print_r(resumirRangos([1, 2, 3, 4]));
echo "\n";
print_r(resumirRangos([-2, 1, 2, 3, 6, 7, 9]));


echo "\n";
print_r(resumirRangos([1, 1, 1, 1, 1]));
echo "\n";
print_r(resumirRangos([0, 1, 2, 5, 6, 9]));
echo "\n";
print_r(resumirRangos([0, 1, 2, 3, 3, 3, 4, 5, 6, 7]));
echo "\n";
print_r(resumirRangos([0, 1, 2, 3, 3, 3, 4, 4, 5, 6, 7, 7, 9, 9, 10]));
echo "\n";
print_r(resumirRangos([-2, 0, 1, 2, 3, 3, 3, 4, 4, 5, 6, 7, 7, 9, 9, 10, 12]));
echo "\n";
