<?php 
     declare(strict_types = 1);
     include 'load.inc.php';
     session_start();
?>

<?php 

         if(isset($_POST["Submit"]) && isset($_SESSION['uname']))
         {

       // $data= stripcslashes(file_get_contents("php://input"));

        //php://input - it is read only stream which reads raw data regardless of type of data
      
      // $mydata= json_decode($data,true); 
       //Json_decode - It takes json string and convert into php object or array
        //if set true then it will convert into php Associative array;

     //$cname= $mydata['name'];

    // $_SESSION['cname']= $mydata['name'];
     //get session variable

     //$cuser= $_SESSION['uname'];

      
      //echo $cuser;
      //echo $_SESSION['uname'];

      //echo $cuser;
      
     
    
         
      

         $cname= $_POST['cname'];
         $cuser= $_SESSION['uname'];

         $cat1= new Cat($cname,$cuser);
        // $notify= $cat1->checkItem();
         $status= $cat1->addItemName();
    
          if($status)
          {
               Header("Location: ../nextpage.php");
          }
          else 
          {
               Header("Location: ../home.php");
          }
          

     }
     else 
     {
           echo "Not Allowed";
     }
      
      



?>





















