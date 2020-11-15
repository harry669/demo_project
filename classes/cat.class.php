<?php 
declare(strict_types = 1);
?>

<?php 

 class Cat extends Db
 {
     public $cname;
     public $user;
    // public $email;


     public function __construct(string $cname,string $user)
     {
          $this->cname= $cname;
          $this->user= $user;
     }
     public function addItemName()
     {
        $check=''; 
        try 
         {
            $sql= "INSERT INTO ucat (cname,cuser) VALUES (?,?)";
            $stmt= $this->connect()->prepare($sql);
            $stmt->execute([$this->cname,$this->user]);
            $check=true;
            return $check;

         }
         catch(PDOException $err)
         {
              $check=false;
              return $check;
         }
        
     }

     public function checkItem()
     {
          
     }
 }
?>