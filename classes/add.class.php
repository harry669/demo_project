<?php 
  
  declare(strict_types = 1);
   session_start();
?>

<?php 
 
 class Add extends Db
 {
     public $pname;
     public $pcost;
     public $pfile;
     public $ptype;
     public $puser;
     public $status= false;

     public function __construct($pname,$pcost,$pfile,$ptype,$puser)
     {
         $this->pname=$pname;
         $this->pcost=$pcost;
         $this->pfile= $pfile;
         $this->ptype= $ptype;
         $this->puser= $puser;
         
     }

     public function upload()
     {
         //sql code goes here
         try 
         {
            $sql= "INSERT INTO pinfo (pname,pcost,pfile,ptype,puser) VALUES(?,?,?,?,?)";
            $stmt= $this->connect()->prepare($sql);
            $stmt->execute([$this->pname,$this->pcost,$this->pfile,$this->ptype,$this->puser]);
            $this->status= true;
            return $this->status;
         
         }
         catch(PDOException $err)
         {
             return $this->status;
         }
     }
 }

 ?>