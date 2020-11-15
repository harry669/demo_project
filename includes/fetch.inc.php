<?php 
   declare(strict_types = 1);
   include 'load.inc.php';
?>

<?php 

/*
if(!isset($_SESSION['uname']))
{
      echo "Not allowed";
      exit();
}
*/


     $token= "harry";
   //  echo $token;
     $fetch= new Fetch($token);
      $data= $fetch->getInfo();
      // echo $data;
       
      //return json format data as response to ajax call

      echo json_encode($data);

?>