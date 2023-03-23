<?php
$name = readline("Введите имя поздравляемого:\n");
$wishes = ["здоровья", "счастья", "успеха", "терпения", "веселья", "везенья"];
$epithets = ["бесконечного", "неиссякаемого", "настоящего", "крепкого", "большого", 
"космического"];

do{
  $num = +readline("Введите количество поздравлений (от 2 до 6): ");
} while(!in_array($num, range(2,6)));

$wishesRandKeys = array_rand($wishes, $num);
$epithetsRandKeys = array_rand($epithets, $num);

$gratulationsArr = [];
$lastGratulation = "";

for ($i=0; $i < $num ; $i++) { 
  if($i == $num - 1) {
    $lastGratulation = "и ".$epithets[$epithetsRandKeys[$i]] ." ". 
    $wishes[$wishesRandKeys[$i]];
    break;
  }
  $gratulationsArr[] = $epithets[$epithetsRandKeys[$i]] ." ". 
  $wishes[$wishesRandKeys[$i]];
}

$gratulationsText = implode(', ',$gratulationsArr) ." ". $lastGratulation;

echo "Дорогой $name, от всего сердца поздравляю тебя с Днем рождения, желаю тебе 
$gratulationsText!";
