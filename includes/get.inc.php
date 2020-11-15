<?php 

declare(strict_types = 1);
include  "load.inc.php";

?>

<?php 


$token= "harry";


$obj= new Get($token);

$data= $obj->getData();

echo json_encode($data);


?>