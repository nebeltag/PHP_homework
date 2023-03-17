<?php

$name = readline("Привет, как Вас зовут?\n");
$age = (int)readline("Сколько Вам лет?\n");

echo "Вас зовут {$name}, Вам {$age} лет.\n";

$tasksValue = (int)readline("Введите количество задач на день от 1 до 10\n");;
$getTasksTime = 0;


for ($i=1; $i <= $tasksValue; $i++) { 
  ${"task$i"} = (string)readline("Какая задача стоит перед вами сегодня?\n");
  ${"taskTime$i"} = (int)readline("Сколько примерно времени эта задача займет?\n");
  }

echo "{$name}, сегодня у вас запланировано {$tasksValue} приоритетных задачи на 
день:\n";

for ($i=1; $i <= $tasksValue; $i++) { 
  echo "${"task$i"} (${"taskTime$i"}ч)\n";
  $getTasksTime += ${"taskTime$i"};
}

echo "Примерное время выполнения плана = {$getTasksTime}ч\n";




// echo "{$name}, сегодня у вас запланировано {$tasksValue} приоритетных задачи на 
// день:\n
// - {$task1} ({$task1Time}ч)\n
// - {$task2} ({$task2Time}ч)\n
// - {$task3} ({$task3Time}ч)\n
// Примерное время выполнения плана = {$getTasksTime}ч\n";