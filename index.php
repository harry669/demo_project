<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        //ajax validation of Form
        $(document).ready(function()
        {
            $("form").submit(function(e)
            {
                e.preventDefault();
                let Uname=$('#uname').val();
                let Email= $('#email').val();
                let Password= $('#password').val();

                let data= 
                {
                    uname:Uname,
                    email:Email,
                    password:Password
                }

                $.ajax(
                    {
                        type:"POST",
                        url: "gateway.inc.php",
                        cache:false,
                        data: data,
                        success: function(data)
                        {
                            if(data == "Correct")
                            {
                            let host= location.hostname;
                            // console.log(location.pathname);
                            let origin= location.origin;
                            let path= origin+"/Jquery/show.php";
                            window.location.href= path;
                            }
                            else 
                            {
                                console.log(data);
                            }
                        },
                        fail: function(status)
                        { 
                            console.log(status);
                        }                
                        
                        
                    }
                )
            })
        })
        
    </script>
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
            background-color: rgba(0, 225, 255, 0.87);
            
        }

        input[type=submit]
        {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer
        }

       

        @media only screen and (max-width:550px)
        {
            .form-box
            {
                border-radius: 5px;
                max-width:500px;
                margin-top:50%;
                margin-bottom: auto;
                
            }
        }


    </style>
</head>
<body>
    <center><h1><b>Login Page</b></h1></center>
    <div class="form-box">
    <form id="f1" method="Post">
        <b><label for="uname">UserName:</label></b><br>
        <input type= "text" id="uname" name="uname">
        <br>
        <b><label for="email">Email:</label></b><br>
        <input type="email" name="email" id="email">
        <br>
        <b><label for= "password">Password:</label></b><br>
        <input type= "password" name="password" id="password">
        <br>
        <br>
        <center><input type="submit" value="Submit" id="Submit" name= "Submit"></center>
    </form>
    </div>

    <!--PHP CODE GOES HERE-->
</body>
</html>