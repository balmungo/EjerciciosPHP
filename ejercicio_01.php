<?php
function doYouSpeak($chain):?bool{
$LIST = ["ingles","english"];
$input = $chain;
$letra =0;
$consecutivo =0;
foreach ($LIST as $key => $value) { 
  while($letra < strlen($input)){
    $LIST[$key][$consecutivo]===$input[$letra] ? $consecutivo++: $consecutivo=0;   
    if($consecutivo === strlen($LIST[$key])) {
      return true;
    }
    $letra++;
  }
  $letra =0;
}
return false;
}


echo "\n";
 var_dump(doYouSpeak("asd44englishlka"));
 var_dump(doYouSpeak("ihflsinglesrhhhr"));
 var_dump(doYouSpeak("jh23sdgjj"));
echo "\n";

?>
