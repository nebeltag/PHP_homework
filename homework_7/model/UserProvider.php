<?php

require_once 'User.php';

class UserProvider 
{
  // private array $accounts = [
  //   'admin' => '123',
  //   'max' => '456'
  // ];

  private PDO $pdo;

  public function __construct (PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function registerUser (User $user, string $plainPassword) : bool 
  {
       $statement = $this->pdo->prepare(
       'INSERT INTO users (name, username, password) VALUES (:name, :username, :password)' 
       );

       return $statement->execute([
          'name' => $user->getName(),
          'username' => $user->getUserName(),
          'password' => md5($plainPassword)
       ]);
  }

  public function getByUsernameAndPassword(string $username, string $password): ?User
   {
      $statement = $this->pdo->prepare(
        'SELECT id, name, username FROM users WHERE username = :username AND
        password = :password LIMIT 1' 
      );
      

      $statement->execute([
        'username' => $username,
        'password' => md5($password)
      ]);

      return $statement->fetchObject(User::class, [$username]) ?: null;


          
      //  $expectedPassword = $this->accounts[$username] ?? null;
      //  if ($expectedPassword === $password) {
      //      return new User($username);
      //  }

      //  return null;
   }

}