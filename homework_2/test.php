<?php
$question = '$a = 5 + "5". Чему будет равно $a?   Варианты:';
$answer1 = '55';
$answer2 = '10';
$answer3 = '5+5';
$bingo = '10';

do {
  $userInput = 
  (string)readline("{$question} {$answer1}, {$answer2}, {$answer3}\n ");
  if ($userInput == $bingo){
    echo "Поздравляем! Ваш ответ верный!\n";
      break;} 
  if ($userInput == $answer1 || $userInput == $answer2 || $userInput == $answer3) {
    echo "Ответ неверный!\n";
      break;} 
}
while($userInput != $bingo); 



