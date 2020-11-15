<?php 
   declare(strict_types = 1);
   include 'load.inc.php';
   session_start();
?>

<?php 


 if(isset($_FILES['pfile']) && isset($_POST["Submit"]))
 {
    $pname= $_POST['pname'];
    $pcost= $_POST['pcost'];
    $ptype= $_POST['product'];

    
 
    if( empty($pname) || empty($pcost) || empty($ptype))
    {
           Header("Location:../addProduct.php");
           //echo "not allowed";
    }
    
    
    else 
    {
         //get file format of uploaded file 
         $list= array('jpeg','png','jpg');
         $oldext=  $_FILES['pfile']['name'];
         $newext= explode(".",$oldext);
         $ext= $newext[3];

         //search in array

         $check= array_search($ext,$list,true);
         $err= $_FILES['pfile']['error'];

         //echo $check;
         //echo $err;

        // echo $_SESSION['uname'];
         
         if($check >=0 && $err == 0)
         {
                

            //File upload code goes here

                  //echo var_dump($_FILES['pfile']);
             $t= time();
             $time= date("M,d,Y h:i:s A");
            $file_path=  $_FILES['pfile']['name'];
            $path= "uploads/".$file_path;
            $puser= "harry";
            //echo $file_path;
           move_uploaded_file($_FILES['pfile']['tmp_name'],"../uploads/".$file_path);

           //send To database
           $obj= new Add($pname,$pcost,$path,$ptype,$puser);
           $status= $obj->upload();
           if($status)
           {
                Header("Location: ../ProductList.php");
           }

         }
          else 
          {
               echo "error while uploading the file to server";
               Header("Location:../addProduct.php");
          }
    }
 }
 else 
 {
      echo "Please Select File";
 }
/*
if(isset($_POST["Submit"]) || isset($_FILES['pfile']))
{
     $pname= $_POST['pname'];
     $pcost= $_POST['pcost'];
     $pfile= $_POST['pfile'];
     $ptype= $_POST['product'];

     if(empty($pname) || empty($pcost) || empty($pfile) || empty($ptype))
     {
             echo "Please select all Field";
     }
     else 
     {
          echo  $_FILES["pfile"];
     }
}
*/




?>