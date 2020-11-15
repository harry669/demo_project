<?php 

  declare(strict_types = 1);

?>
<?php 
class Valid extends Db
{
      //class instance variables
      public $email ;
      public $password;


      public function __construct(string $email,string $password)
      {
          $this->email= $email;
          $this->password=$password;
      }

      //method To check email
      public function checkMail()
      {
            //here we will also check for password
            //here we will also check for db connection

            $status= '';
            
            try 
            {
                $sql= "SELECT * from uinfo WHERE Email= ?";
                $stmt= $this->connect()->prepare($sql);
                $stmt->execute([$this->email]);
                while($user= $stmt->fetch())
                {
                     $status=  $user['Email'];
                }
    
                return $status;
            }
            catch(PDOException $err)
            {
                   $status= false;
                   return $status;
            }
      }

}


?>