<?php

class User {

  private ?int $id;
  private ?string $username;
  private string $name;

  public function __construct(int $id = null, string $username = null) {
    
    $this->id = $id;
    $this->username = $username;    
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