<?php 

declare(strict_types = 1);

?>

<?php 

class Get extends Db
{
    public $user;

    public function __construct($user)
    {
            $this->user=$user;
    }

    public function getData()
    {
        $sql= "SELECT * FROM pinfo WHERE puser= ?";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute([$this->user]);
        $user= $stmt->fetchAll();
        return $user;
    }
}













?>