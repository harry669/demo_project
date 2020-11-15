<?php 
           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        input[type=text]
        {
           min-width:50%;    
           border:1px solid black;
           padding: 12px 20px;
           display:inline-block;
           border-radius: 4px;
           box-sizing: border-box;
           border:2px solid red;
          
        }

        input[type=email]
        {
            min-width:50%;    
           border:1px solid black;
           padding: 12px 20px;
           display:inline-box;
           border-radius: 4px;
           box-sizing: border-box;
           border:2px solid red;
           
        }

        input[type=password]
        {
            min-width:50%;  
           border:1px solid black;
           padding: 12px 20px;
           display:inline-box;
           border-radius: 4px;
           box-sizing: border-box;
           border:2px solid red;
          
        }

        .form-box
        {
            border-radius: 5px;
            border:2px solid silver;
            padding:20px;
            margin-top:20%;
            box-sizing: border-box;
            
            
        }

        input[type=submit]
        {
           
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            background-color: green;
        }


    </style>
</head>
<body class= "bg-dark">
    <center><h1><b class= "text-info">Login Page</b></h1></center>
    <div class="container pt-3 my-3 bg-light text-dark border border-success rounded-lg shadow p-4">
    <form id="f1" class= "f1" action= "login.php" method="Post">
    <div class= "row">
       <div class= "col">
        <b><label for="uname">UserName:</label></b><br>
        <input type= "text" id="uname" name="uname">
        </div>
        </div>
    <div class= "row">
        <div class= "col">
        <b><label for="email">Email:</label></b><br>
        <input type="email" name="email" id="email">
        </div>
    </div>
    <div class= "row">
        <div class= "col">
        <b><label for= "password">Password:</label></b><br>
        <input type= "password" name="password" id="password">
        <br>
        </div>
    </div>
         <div class= "row">
          <div class= "col">
        <center><input type="submit" value="Submit" id="Submit" name= "Submit"></center>
           </div>
         </div>
    </form>
    </div>

    <!--PHP CODE GOES HERE-->
</body>
</html>