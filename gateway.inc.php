<?php 

$data= $_POST['uname'];

if(empty($data))
{
     echo "Please Enter User name";
}
else 
{
    echo "Correct";
}

//data received through ajax calling

//validate the data


//echo json_encode($err);



?>