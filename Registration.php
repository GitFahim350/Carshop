
<?php
 include 'header.php';
                                        
                                        $conn = mysqli_connect('localhost', 'root', '','myinfo');
                                        
                                        if(isset($_POST['Sign_in']))
                                        {
                                            if($conn)
                                            {
                                                
                                                if($_POST['uname']!=null&&$_POST['email']!=null&&$_POST['password']!=null&&$_POST['Reppassword']!=null)
                                                {
                                                    
                                                    $u=$_POST['uname'];
                                                    $e=$_POST['email'];
                                                    $p=$_POST['password'];
                                                    $rp=$_POST['Reppassword'];
                                                    $check="select * from userinf where username='$u'";
                                                    $checkemail="select * from userinf where email='$e'";
                                                    if($p==$rp)
                                                    {
                                                        $result=mysqli_query($conn, $check);
                                                        $resultemail=mysqli_query($conn, $checkemail);
                                                        $num=mysqli_num_rows($result);
                                                        $num1=mysqli_num_rows($resultemail);
                                                        $namefail=0;
                                                        $passwordfail=0;
                                                        if($num==1)
                                                        {
                                                            echo" <div class='row' style='margin:0%'>";
                                                            echo"<div class='col-md-3'>";
                                                            
                                                            echo"</div>";
                                                            echo"<div class='col-md-6'>";
                                                            echo"<br><br>";
                                                            echo"<h5 style='color:white;font-weight:bold;text-align:center'>User already exist</h5>";
                                                            echo"</div>";
                                                            echo"<div class='col-md-3'>";
                                             
                                                            echo"</div>";
                                                            echo"</div>";
                                                            
                                                        
                                                        }
                                                       else if($num1==1)
                                                            {
                                                                echo" <div class='row' style='margin:0%'>";
                                                                echo"<div class='col-md-3'>";
                                                                echo"</div>";
                                                                echo"<div class='col-md-6'>";
                                                                echo"<br><br>";
                                                                echo"<h5 style='color:white;font-weight:bold;text-align:center'>Email already used</h5>";
                                                                echo"</div>";
                                                                echo"<div class='col-md-3'>";
                                                 
                                                                echo"</div>";
                                                                echo"</div>";
                                                            }
                                                        else{
                                                           
                                                            $sql='INSERT INTO userinf (username, email, password) VALUES ("'.$u.'","'.$e.'","'
                                                            .md5($p).'")';
                                                            if (mysqli_query($conn, $sql)) {
                                                                echo "New record created successfully";
                                                                $_SESSION["username"]=$u;
                                                                $_SESSION["email"]=$e;
                                                                $_SESSION["password"]=$p;
                                                                mysqli_close($conn);
                                                                echo $_SESSION["username"];
                                                                
                                                                echo $_SESSION["email"];
                                                                
                                                                echo $_SESSION["password"];
                                                                header ("location: userprofile.php");
                                                            } else {
                                                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                                            } 
                                                        
                                                        }
                                                        
                                                    }
                                                else{
                                                    echo" <div class='row' style='margin:0%'>";
                                                                echo"<div class='col-md-3'>";
                                                 
                                                                echo"</div>";
                                                                echo"<div class='col-md-6'>";
                                                                echo"<br><br>";
                                                                echo"<h5 style='color:white;font-weight:bold;text-align:center'>Password is not matching</h5>";
                                                                echo"</div>";
                                                                echo"<div class='col-md-3'>";
                                                 
                                                                echo"</div>";
                                                                echo"</div>";
                                                }
                                                }
                                            }
                                        }
                                        
                                       
                                        ?>
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
<body id="loginpage" style="padding:0%">
        <div class="container" style="margin-top:100px">
                <div class="row">
        
                    <div class="col-md-3" >
        
                    </div>
                    <div class="col-md-6"  >

                        

                                 <form action="Registration.php" method="post">
                                            
                                        <div style="margin-top:100px">
    
                                        <h1 id="regtxt" class=" text-center" style=" color: rgb(255, 255, 255)" >
                                                Create Your Own Account
                                            </h1>
                                            
                                            <div class="input-group" style="padding: 20px;">
                                                <span class="input-group-addon"> <span class="fas fa-user" ></span> </span>
                                                <input type="text" style="background: none;border:none;font-weight: bold;color:white"  class="form-control" name="uname" placeholder="User name">
                                            </div>
                                            <br>
                                            <br>
    
                                            <div class="input-group" style="padding: 20px;">
                                                        <span class="input-group-addon"> <span class="fas fa-lock" ></span> </span>
                                                        <input type="email" style="background: none;border:none;font-weight: bold;color:white"  class="form-control" name="email" placeholder="Email">
                                            </div>
    
                                        <br>
                                        <br>
    
                                        <div class="input-group" style="padding: 20px;">
                                                        <span class="input-group-addon"> <span class="fas fa-lock" ></span> </span>
                                                        <input type="password" style="background: none;border:none;font-weight: bold;color:white"  class="form-control" name="password" placeholder="Enter Password">
                                                    </div>
    
                                        <br>
                                        <br>
    
                                        <div class="input-group" style="padding: 20px;">
                                                        <span class="input-group-addon"> <span class="fas fa-lock" ></span> </span>
                                                        <input type="password" style="background: none;border:none;font-weight: bold;color:white"  class="form-control" name="Reppassword" placeholder="Enter Password Again">
                                                </div>
                                        
    
    
                                            <div class="col-md-12">
    
                                            <input type="submit" class="btn btn-danger" name="Sign_in" value="Sign in">
                                            </div>
                                            
                                </div>
                                </form>


                                
                       
                       
                                   
                        
                    </div>
                    <div class="col-md-3" >
        
                    </div>
        
                </div>
        
            </div>
            

            

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>