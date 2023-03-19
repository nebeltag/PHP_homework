<?php

$name = readline("Привет, как Вас зовут?\n");
$age = (int)readline("Сколько Вам лет?\n");

echo "Вас зовут {$name}, Вам {$age} лет.\n";

$tasksValue = 3;

$task1 = readline("Какая задача стоит перед вами сегодня?\n");
$task1Time = + readline("Сколько примерно времени эта задача займет?\n");

$task2 = readline("Какая еще задача стоит перед вами сегодня?\n");
$task2Time = (int)readline("Сколько примерно времени эта задача займет?\n");

$task3 = readline("Какая еще задача стоит перед вами сегодня?\n");
$task3Time = (int)readline("Сколько примерно времени эта задача займет?\n");

$getTasksTime = $task1Time + $task2Time + $task3Time;

echo "{$name}, сегодня у вас запланировано {$tasksValue} приоритетных задачи на 
день:\n
- {$task1} ({$task1Time}ч)\n
- {$task2} ({$task2Time}ч)\n
- {$task3} ({$task3Time}ч)\n
Примерное время выполнения плана = {$getTasksTime}ч\n";

