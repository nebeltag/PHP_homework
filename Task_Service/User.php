<?php
class User {
   private string $username;
   private string $email;
 
  public function __construct(string $username, string $email)
  {
    $this->username = $username;
    $this->email = $email;
  }
   
   public function getUsername()
   {
      return $this->username;
   }

   
   public function setUsername($username)
   {
      $this->username = $username;
      
   }
}

