<?php
function ordenaAlfaNumerico($arr = [])
{
  $arrString = [];
  $arrInt = [];
  foreach ($arr as $value) {
    if (is_int($value)) $arrInt[] = $value;
    if (is_string($value)) {
      is_numeric($value)
        ? $arrInt[] = $value + 0.4
        : $arrString[] = $value;
    }
  }
  $buble = function ($list = []) {
    $res = $list;
    $size = count($list) - 1;
    for ($i = 1; $i <= $size; $i++) {
      if ($res[$i - 1] > $res[$i]) {
        $temp = $res[$i - 1];
        $res[$i - 1] = $res[$i];
        $res[$i] = $temp;
      }
      if ($i === $size) {
        $i = 0;
        $size--;
      }
    }
    return $res;
  };
  $arrInt = $buble($arrInt);
  foreach ($arrInt as &$value) {
    if (is_float($value)) {
      $value = "" . round($value);
    }
  }
  unset($value);
  $out = $buble($arrString);
  foreach ($arrInt as $value) {
    $out[] = $value;
  }
  return $out;
}
$lista = [4, "5", 2, "s", 5, "1", 3, 1, "a", "B", "k", "A", "7", "D", "8", "C", "e", "L"];
print_r(ordenaAlfaNumerico($lista));

echo "\n";
print_r(ordenaAlfaNumerico(["a", "z", "b"]));
echo "\n";
print_r(ordenaAlfaNumerico(["a", "Z", "B"]));
echo "\n";
print_r(ordenaAlfaNumerico(["1", "z", "a"]));
echo "\n";
print_r(ordenaAlfaNumerico([3, "2", 1, "a", "c", "b"]));
echo "\n";
print_r(ordenaAlfaNumerico([3, "2", 1, "1", "3", 2]));
echo "\n";
