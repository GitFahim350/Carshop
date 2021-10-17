<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=ul, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>

<div>
                <nav class="navbar navbar-expand-sm  fixed-top  navbar-dark bg-dark" style="margin:0%" >
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#my-menu" style="border-radius: 5px">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="my-menu">
        
                            <a href="" class="navbar-brand">
                                    <img src="Cars/CarShop_logo.png" alt="" style="width: 100px">
                            </a>
        
                            <ul class="navbar-nav ml-auto" >
                                    <li class="nav-item" style="margin-left: 10px;margin-right: 10px">
                                        <a href="project.php?logout=0" class="nav-link " style="font-family: Courier New">HOME</a>
                                    </li >
                                    <li class="nav-item" style="margin-left: 10px;margin-right: 10px">
                                            <a href="about.php" class="nav-link" style="font-family: Courier New">ABOUT US</a>
                                    </li>

                                    <li class="nav-item" style="margin-left: 10px;margin-right: 10px">
                                            <a href="order.php" class="nav-link" style="font-family: Courier New">BUY NOW</a>
                                    </li>
                                    
                                    <li class="nav-item" style="margin-left: 10px;margin-right: 10px">
                                            <a href="contact.php" class="nav-link" style="font-family: Courier New">CONTACT US</a>
                                            
                                    </li>
                                    <?php
                                    session_start();
                                    
                                    if(isset($_SESSION["username"]))
                                    {
                                        echo"<li class='nav-item' style='margin-left: 10px;margin-right: 10px'>";
                                        echo"<a href='userprofile.php' class='nav-link' style='font-family: Courier New'>PROFILE</a>";
                                        echo" </li>";
                                        echo"<li class='nav-item' style='margin-left: 10px;margin-right: 10px'>";
                                        echo"<form action='logoutform.php' method='post'>";
                                        echo"<input type='submit' style='height:40px' class=' btn-danger setbtn' name='out'  value=LOGOUT>";
                                        echo"</li>";

                                        
                                    }
                                    else{

                                        echo"<li class='nav-item' style='margin-left: 10px;margin-right: 10px'>";
                                        echo"<form action='loginform.php' method='post'>";
                                        echo"<input type='submit' style='height:40px' class=' btn-danger setbtn' name='in'  value=LOGIN>";
                                        echo"</form>";
                                        echo"</li>";
                                    }
                                    ?>
                                   
                            </ul>
        
                    </div>
                </nav>    
        </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
</body>
</html>