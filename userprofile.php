
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
        <link rel="stylesheet" href="style.css">
        
        <title>Document</title>
</head>
<body id="loginpage">



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 "  >
                <div  style="background:rgb(0, 0, 0);opacity:0.8;width: 100%;height: 350px;margin-top: 50%">

                    <div style="text-align: center">

                        <h1 class="display-4"  style="color: white">
                            Profile
                        </h1>
                        
                        <div>

                        <?php
                        session_start();
                         $name=$_SESSION["username"];
                         $email=$_SESSION["email"];
                         $password=$_SESSION['password'];
                            echo" <h1  style='color: white'>Name:$name  </h1>";
                            echo" <h1  style='color: white'>Email: $email</h1>";
                            echo" <h1  style='color: white'>Password:$password</h1>";
                        
                        ?>
                            
                            <a href="#">Edit profile</a>
                        </div>

                    </div>

                </div>
                
            </div>
            <div class="col-md-4">

            </div>

        </div>

    </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>