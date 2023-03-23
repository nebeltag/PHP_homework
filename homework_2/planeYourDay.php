<?php

$name = readline("Привет, как Вас зовут?\n");
$age = (int)readline("Сколько Вам лет?\n");

echo "Вас зовут {$name}, Вам {$age} лет.\n";

do {
  $tasksValue = (int)readline("Введите количество задач на день от 1 до 10\n");
} while($tasksValue < 1 || $tasksValue > 10);

$getTasksTime = 0;

// Вариант 1

/*for ($i=1; $i <= $tasksValue; $i++) { 
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
*/

// Вариант 2

$out = "{$name}, сегодня у вас запланировано {$tasksValue} приоритетных задачи на 
день:\n";

for ($i=1; $i <= $tasksValue; $i++) { 
  $task = (string)readline("Какая задача стоит перед вами сегодня?\n");
  $taskTime = (int)readline("Сколько примерно времени эта задача займет?\n");
  $out .= "- $task ({$taskTime}ч.)\n";
  $getTasksTime += $taskTime;
  }

echo $out;  
echo "Примерное время выполнения плана = {$getTasksTime}ч\n";

