<?php 

declare(strict_types = 1);

?>

<?php 

class Delete extends Db
{
    public $id;
    public $status=true;
    public $newid;
    public $type;
    public function __construct($id,$type)
    {
        $this->id= $id;
        $this->newid= (int)$id;
        $this->type= $type;
    }

    public function deleteData()
    {
        if($this->type == "pinfo")
        {
            try 
            { 
                $sql= "DELETE FROM $this->type WHERE pid= ?";
                $stmt= $this->connect()->prepare($sql);
                $stmt->execute([$this->newid]);
                $this->status= true;
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
                $sql= "DELETE FROM $this->type WHERE cid= ?";
                $stmt= $this->connect()->prepare($sql);
                $stmt->execute([$this->newid]);
                $this->status= true;
                return $this->status;
            }
            catch(PDOException $err)
            {
                 $this->status= "false";
                 return $this->status;
            }
        }
       
        
        
         //return  gettype($this->newid);
    }
}














?>