<?php


include "User.php";
include "Task.php";
include "Comment.php";
include "TaskService.php";

$user = new User('max', 'max@gmail.com');
$task = new Task($user, 'Task1', 3);

TaskService::addComment($user, $task,'time is running out');
TaskService::addComment($user, $task,'2 hours left');

echo "Comments " . PHP_EOL;

/**
 * @var Comment $comment
 */

 foreach($task->getComments() as $comment)
 {
  echo $comment->getText() . ", ";
  echo "task name " . $comment->getTask()->getDescription() . PHP_EOL;
  echo $comment->getAuthor()->getUsername() . PHP_EOL;;
 }

 
