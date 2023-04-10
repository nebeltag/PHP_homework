<?php

class TaskProvider {

  // хранилище задач

  private array $tasks;

  public function __construct () {

    //при создании хранилища читаем задачи из сессии
    $this->tasks = $_SESSION['tasks'] ?? [];
  }

  /**
   * Метод, возвращающий список невыполненных задач
   * @return array
   */
  public function getUndoneList() : array
  {


    /*
     return array_map(function (Task $task) {
             return $task->isDone ?: $task;
            }, $this->task);
     */
  

  /**
   * @var Task $task
   */

   $tasks = [];

   foreach ($this->tasks as $key => $task) {
           if (!$task->isDone()) {
             $tasks[$key] = $task;
           }
   }

     return $tasks;     

  }

  public function addTask(Task $task) : void
  {
     $_SESSION['tasks'][] = $task;
     $this->tasks[] = $task;
  }

  public function deleteTask(int $key) : void
  {
     unset($_SESSION['tasks'][$key]);
     unset($this->tasks[$key]);
  }

}
