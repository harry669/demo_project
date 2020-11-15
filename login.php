<?php 

//check for csrf token


session_start();

if(isset($_POST['Submit']))
{
       echo "ok";
       echo "<br>";
       echo "old Id";
       echo "<br>";
       echo session_id();
       echo session_name();
       //logout from session_id;
       //logout code
       
// Initialize the session.
// If you are using session_name("something"), don't forget it now!

 $_SESSION['uname']= $_POST['uname'];
 echo $_SESSION['uname'];

 echo "<br>";
 echo "new sessionid";
 echo "<br>";
 echo session_id();
// Unset all of the session variables.
//$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
header("Location: home.php");

}
else 
{
    header("Location: index.php");
}
?>

