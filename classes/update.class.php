<?php 

declare(strict_types = 1);

?>
 
<?php
  //This is Category update page
class Update extends Db
{
    public $id;
    public $name;
    public $status=true;
    public $type;
    public function __construct($data,$id,$type)
    {
         $this->id= $id;
         $this->name= $data;
         $this->type= $type;
    }

    public function updateData()
    {
          if($this->type == "pinfo")
          {
            try 
            {
    
                $sql="UPDATE $this->type SET pname=? WHERE pid=?";
                $stmt= $this->connect()->prepare($sql);
                $stmt->execute([$this->name,$this->id]);
                return $this->status;
            } 
            catch(PDOException $err)
            {
                 $this->status= "false";
                 return $this->status;
            }
          }
        else 
        {
            try 
            {
    
                $sql="UPDATE $this->type SET cname=? WHERE cid=?";
                $stmt= $this->connect()->prepare($sql);
                $stmt->execute([$this->name,$this->id]);
                return $this->status;
            } 
            catch(PDOException $err)
            {
                 $this->status= "false";
                 return $this->status;
            }
        }
        
    }
}





?>