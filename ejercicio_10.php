<?php
function cuadInRect($valHeigth = 0, $valWidith = 0)
{
  $res = [];
  $heigth = $valHeigth;
  $widith = $valWidith;
  if ($heigth === $widith) return $res;
  while (true) {
    if ($heigth === $widith) {
      $res[] = $heigth;
      break;
    }
    if ($heigth < $widith) {
      $res[] = $heigth;
      $widith = $widith - $heigth;
    } else {
      $res[] = $widith;
      $heigth = $heigth - $widith;
    }
  }
  return $res;
}

print_r(cuadInRect(3, 5));
print_r(cuadInRect(5, 3));
print_r(cuadInRect(20, 14));
print_r(cuadInRect(9, 15));
print_r(cuadInRect(3, 3));
print_r(cuadInRect(1, 2));
