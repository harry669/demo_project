<?php 
  declare(strict_types = 1);
  session_start();
?>
<?php

class Fetch extends Db
{
    public $name;
    public $data= array();

    public function __construct(string $name)
    {
        $this->name=$name;
    }

    public function getInfo()
    {
        $sql= "SELECT * FROM ucat WHERE cuser= ?"; 
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute([$this->name]);
        $user= $stmt->fetchAll();
         //$this->data=array();
         foreach($user as $list)
         {
             $this->data[]= $user;
         }                 
         
         return $this->data;
    }
}







?>