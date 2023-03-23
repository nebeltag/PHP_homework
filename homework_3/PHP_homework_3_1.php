<?php

$arrA = range(1,10);
$arrB = range(1,10);
shuffle($arrA);
shuffle($arrB);
$resArr = [];

// for ($i=0; $i < count($arrA); $i++) { 
//   $resArr[] = $arrA[$i] * $arrB[$i];
// }
// print_r($resArr);

//------------------------------------------

// Через foreach

foreach($arrA as $i => $el) {
  $resArr[] = $el * $arrB[$i];
}

print_r($resArr);