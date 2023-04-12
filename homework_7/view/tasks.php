<?php
/** @var Task $task ...*/
?>

<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>
<body>
   <h1><?=$pageHeader?></h1>

   <?php include 'menu.php' ?><br/><br/>   

   <form action = "/?controller=tasks&action=add" method = "post">
   <input type='text' name="task" placeholder='Опишите задачу'>
   <input type='submit' value='Добавить'>
   </form> 
   
   
   
   
   <h2>Задачи</h2>

   <?php foreach ($tasks as $key => $task):?>
   <div>
    <?=$task->getDescription()?> 
    <a href="/?controller=tasks&action=done&key=<?=$task->getId()?>">[Done]</a><br/><br/>
   </div>
   <?php endforeach;?>

</body>