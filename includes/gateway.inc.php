<?php 
     declare(strict_types = 1);
     include 'load.inc.php';
     session_start();
?>

<?php 
//here we will receive 

if(isset($_POST["Submit"]))
{
      $email= $_POST["email"];
      $password= $_POST["password"];
      $name= $_POST['uname'];


      //create hash password
      //$hash_password=  password_hash($password, PASSWORD_DEFAULT);
              // $hash_password="$2y$10$OWer0VbfJczxegbr7zzP8.mybfYmLsz832Tr/lHzg2FphcMOO6m9m";

         //calling To Valid class
            $valid1= new Valid($email,"password");
        
           $status= $valid1->checkMail();
           if(strlen($status)>0 && $status!== false)
           {
                 //setting up user session variables

                 //session_regenerate_id(true);
                 $_SESSION['uname']= $name;

                 //echo session_id();
                //echo $_SESSION['uname'];
                 header("Location: ../home.php");   // IF everything is ok then user will redirect to Home page of Our website
           }
           else 
           {
                echo "User Not exists With this Email address";
           }

         /*
        if(status)
        {
             header("Location: ../home.php");
             exit;
        }
        */
}

?>