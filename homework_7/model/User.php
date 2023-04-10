<?php

class User {

  private int $id;
  private string $username;
  private string $name;

  public function __construct(string $username) {
    $this->username = $username;    
  }

  /**
   * Get the value of name
   */ 
  public function getName() : string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name) : self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of username
   */ 

  public function getUserName(): string
  {
      return $this->username;
  }

  /**
   * Set the value of username
   *
   * @return  self
   */ 
  public function setUsername($username) : self
  {
    $this->username = $username;

    return $this;
  }

  
}