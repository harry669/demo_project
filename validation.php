<?php 

if(isset($_POST['Submit']))
{
    if(isset($_POST['FirstName']))
    {
         echo $_POST['FirstName'];
    }
    else
    {
        echo "Not available";
    }
}

?>