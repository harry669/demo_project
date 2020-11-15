<?php 

declare(strict_types = 1);
include  "load.inc.php";

?>
<?php 

if( isset($_POST['id']) && isset($_POST['data']) && isset($_POST['type']) ) 
{
     //sending data 
    $data= $_POST['data'];
    $id= $_POST['id'];
    $type= $_POST['type'];
    $obj= new Update($data,$id,$type);

    $check= $obj->updateData();
    if($check)
    {
         echo $check;
    }
}
else 
{
     echo "value not selected";
}














?>
