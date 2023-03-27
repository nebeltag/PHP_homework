<?php

$arr = range(1,20);
$myFunc = function(array $someArr) : array
{	
return $resArray = [	
"max" => max($someArr), 	
"min" => min($someArr), 	
"avg" => array_sum($someArr) / count($someArr)
];	
};

print_r($myFunc($arr));