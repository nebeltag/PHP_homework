<?php

class Task {

  private int $id;
  private int $user_id;
  private ?string $description;
  private bool $isDone = false;

  public function __construct (string $description = null) 
  {
     $this->description = $description;
  }

  
  public function getDescription() : string
  {
    return $this->description;
  }

  
  public function setDescription(string $description) : void
  {
    $this->description = $description;
  }

  public function isDone() : bool
  {
     return $this->isDone;      
  }

  public function setIsDone(bool $isDone) : void
  {
    $this->isDone = $isDone;
  }

  /**
   * Get the value of id
   */ 
  public function getId() : int
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id) : self
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of user_id
   */ 
  public function getUser_id() : int
  {
    return $this->user_id;
  }

  /**
   * Set the value of user_id
   *
   * @return  self
   */ 
  public function setUser_id($user_id) : self
  {
    $this->user_id = $user_id;

    return $this;
  }
}