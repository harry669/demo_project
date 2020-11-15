<?php 

//mysql PDO

class Db
{
     //private database variables
     private $host= "localhost" ;
     private $user= "root";
     private $pwd= "";
     private $db= "e-commerce";

      
     protected function connect()
     {
          $dsn= 'mysql:host='. $this->host . ';dbname=' . $this->db ;
          $pdo= new PDO($dsn,$this->user,$this->pwd);

          $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;

     }
     
}