<?php
//logout functionality
session_start();
//echo $_SESSION['uname'];

if(isset($_SESSION['uname']))
{
       //we have to destroy session
       //unset($_SESSION['uname']);
      // session_regenerate_id();
      
      $_SESSION = array();
      if (ini_get("session.use_cookies")) {
          $params = session_get_cookie_params();
          setcookie(session_name(), '', time() - 42000,
              $params["path"], $params["domain"],
              $params["secure"], $params["httponly"]
          );
     }
     session_destroy();
     

      //echo $_SESSION['uname'];
      Header("Location: ../index.php");
     
}
else 
{
     Header("Location: ../index.php");
}
?>