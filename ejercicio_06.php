<?php
function searchChair($rooms = [], $needChair = 0)
{
  $need = $needChair;
  $list = $rooms;
  $output = [];
  $chairs = 0;
  $chairFree = 0;
  $message = "";
  if ($need === 0) {
    $message = "Game On";
    return  $message;
  }
  foreach ($list as $value) {
    $peoples = strlen($value[0]);
    if ($chairs >= $need) break;
    if ($peoples < $value[1]) {
      $chairs += $value[1] - $peoples;
      $chairFree = $value[1] - $peoples;
      array_push($output, $chairFree);
      continue;
    }
    array_push($output, 0);
  }
  foreach ($output as &$value) {
    if ($value < $need) {
      $need = $need - $value;
    } else {
      $value = $need;
    }
  }
  unset($value);
  if ($chairs < $need) {
    $message = "Not enough!";
    return $message;
  }
  return $output;
}

$listRooms = [['XXX', 3], ['XXXXX', 6], ['XXXXXX', 9], ['XXX', 2]];
$listRooms2 = [['XXX', 3], ['XXXXX', 6], ['XX', 3], ['XX', 12], ['XX', 5]];
$listRooms3 = [['XXX', 3], ['XXXXX', 6], ['XX', 2], ['XX', 2]];


echo "\n";
print_r(searchChair($listRooms, 4));
echo "\n";
print_r(searchChair($listRooms2, 4));
echo "\n";
print_r(searchChair($listRooms2, 0));
echo "\n";
print_r(searchChair($listRooms3, 6));
echo "\n";
