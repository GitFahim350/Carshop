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
    


    <div class="container">
        <div class="row">

            <div class="col-md-3" >

            </div>
            <div class="col-md-6"  >

                <form action="loginform.php" method="post">

                        <div style="margin-top:100px">

                                <h1 id="logintext" class="display-1 text-center">
                                        Login 
                                    </h1>
                                    
                                    <div class="input-group">
                                           <span class="input-group-addon"> <span class="fas fa-user" ></span> </span>
                                        <input type="text" style="background: none;border:none;color: white;font-weight: bold;" class="form-control" name="user" placeholder="User name">
                                    </div>
                                    <br>
                                    <br>
                    

                                    <div class="input-group">
                                            <span class="input-group-addon"> <span class="fas fa-lock" ></span> </span>
                                            <input type="password" style="background: none;border:none;font-weight: bold;" class="form-control"  name="password" placeholder="Password">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
        
                                                <a href="Registration.php" style="color: white;float: left;margin-top: 20px">Don't have any Account</a>
                                        </div>
                                        <div class="col-md-6">
        
                                            <a href="#" style="color: white;float: right;margin-top: 20px">Forget Password?</a>
                                        </div>
        
                                    </div>
        
                                    <div class="col-md-12">

                                    <input type="submit" class="btn btn-danger" name="Login" value="Login">
        
                                    </div>
        
                        </div>
                </form>
                
               
            </div>
            <div class="col-md-3" >

            </div>

        </div>

    </div>


        <?php
        session_start();
        $_SESSION["username"]=null;
        $conn = mysqli_connect('localhost', 'root', '','myinfo');
       
        if(isset($_POST['Login'])&&$conn)
        {
            $u=$_POST['user'];
            $p=$_POST['password'];
            //$check="select * from userinf where username='$u' and password='$p'";
            $check='SELECT * FROM userinf WHERE username="'.$u.'" AND password= "'.md5($p).'"';            
            $result=mysqli_query($conn, $check);
            $num=mysqli_num_rows($result);
            $row=mysqli_fetch_assoc($result);
            if($num==1)
            {
                $_SESSION["username"]=$u;
                $_SESSION["email"]=$row["email"];
                $_SESSION["password"]=$p;
                
                header ("location: project.php");
            }
            else{
               echo" <div class='row'>";
               echo"<div class='col-md-3'>";

               echo"</div>";
               echo"<div class='col-md-6'>";
               echo"<p style='color:red;font-weight:bold;text-align:center'>Username or Password is Incorrect</p>";
               echo"</div>";
               echo"<div class='col-md-3'>";

               echo"</div>";
               echo"</div>";
               
            }
        }
        ?>
        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>