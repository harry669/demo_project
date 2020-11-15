<?php 

declare(strict_types = 1);
include 'load.inc.php';

?>

<?php

$data= $_POST['id'];
$type= $_POST['type'];
//echo $data;
//echo $data;
//echo "Helllo";
$obj= new Delete($data,$type);

$status= $obj->deleteData();

 if($status)
 {
    echo $status;
 }
    //header("Location: ../ProductList.php");
   



?>