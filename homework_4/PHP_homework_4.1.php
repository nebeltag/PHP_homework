<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$myFunc = function (int $el) :string
{	
return $el%2 == 0 ? "четное" : "нечетное";     
};
    
$resArr = array_map($myFunc, $arr);  
print_r($resArr);
  