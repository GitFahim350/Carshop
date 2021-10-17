<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="item.css">
    <title>Document</title>
</head>
<body style="background: grey">
    <?php
      $id=$_GET["id"];
      $conn = mysqli_connect('localhost', 'root', '','myinfo');
      $sql="select * from product where pid=$id";
      $result=mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($result);
      $pid=$row["pid"];
      $link=$row["link"];
      $pname=$row["pname"];
      $mileage=$row['mileage'];
      $mpg=$row['mpg'];
      $fuel=$row['fuel'];
      $engine=$row['engine'];
      $color=$row['color'];
      $year=$row["year"];
      $transmission=$row["transmission"];
      $emmisions=$row["emmisions"];
      $doors=$row["doors"];
      $body=$row["body"];
      $des=$row["description"];
      $prevprice=$row["prevprice"];
      $newprice=$row["newprice"];
      $monthly=$row["monthly"];
      $result=false;
      $conn = mysqli_connect('localhost', 'root', '','myinfo');
      if(isset($_POST['Req'])&&$conn)
      {
        $productid=$_SESSION["product"];
        $username=$_SESSION["username"];
        $sql="INSERT INTO `cart`(`username`, `pid`) VALUES ('$username',$productid)";
        mysqli_query($conn, $sql);
      }

      echo"<div class='head' style='background: url($link) no-repeat;background-size: cover;background-position: center; background-attachment: fixed; position:relative'>";
      echo"<div class='container-fluid'>";
              
      echo"<div class='row fixed-bottom' style='position:absolute; width:100%;margin:0%'>";
      echo"<div class='col-md-4 ' style='background:black;opacity:0.5;text-align: center;color:white;'>";

      echo"<h1 class='display-4 ' >$pname</h1>";

      echo"  <span class='h3'>$year</span><span class='h3'> $mileage</span><span class='h3'> $fuel</span>";


      echo"</div>";
      echo"<div class='col-md-4 'style='background:black;opacity:0.5;text-align: center;color:white'>";

      echo"<span class='display-4'>$newprice</span><span class='h3' > was <span style='text-decoration: line-through;'> $prevprice</span></span>";
      echo"<br>";
      echo"<span class='h3'>or from <span class='h2'> $monthly</span> monthly</span>";

      echo" </div>";
      echo"<div class='col-md-4' style='background:black;opacity:0.5;padding:50px;box-sizing: border-box;'>";
      if(isset($_SESSION["username"]))
      {
        $username=$_SESSION["username"];
        $sql="select * from cart where username='$username' and pid=$id";
       $result=mysqli_query($conn, $sql);
       $num=0;
       $num=mysqli_num_rows($result);
      }
      

      if(isset($_SESSION["username"])&&$num==0)
      {
        echo"<form action='' method='post'>";
        $_SESSION["product"]=$id;
        echo"<div style='text-align: center;'  >";
        echo"<input type='submit'  class='btn btn-danger '  name='Req' value='ADD TO CART'>";
        echo"</div>";
        echo"</form>";
      }
      else if(isset($_SESSION["username"])&&$num!=0)
      {
        echo"<div style='text-align: center;'>";
        echo"<input type='submit'  class='  btn btn-danger '  name='' value='REQUESTED'>";
        echo"</div>";
      }
     
      echo"</div>";

      echo"</div>";

      echo"</div>";

      echo"</div>";

      echo"<div>";

      echo"<p class='display-4' style='font-weight: bold;color:white;text-align: center'>Car details</p>";
  
      echo"<div style='color: white;background:rgb(82, 82, 82);border-radius: 20px;margin-left: 15px;margin-right: 15px;opacity: 0.5;padding:10px;box-sizing: border-box'>";
      echo"<h1>Parking sensors</h1>";
      echo"<h5>$des</h5>";
      echo" </div>";
  
      echo" <div>";
      echo"<h3 style='text-align: center'>Key Facts</h3>";
      echo"<div style='color: white;background:rgb(0, 0, 0);height:100px;padding:40px;border-radius: 0px;margin-left: 15px;margin-right: 15px;opacity: 0.5'>";
            echo"<div style='text-align:center'><span class='fas fa-leaf h2'></span><span class='h2'>CO <sub>2</sub> $emmisions. </span> <span class='fas fa-gas-pump h2'></span><span class='h2'>  MPG $mpg</span></div>";
      echo"</div>";
      
      echo"<div style='color: rgb(150, 25, 25);background:rgb(255, 255, 255);border-radius: 0px;margin-left: 15px;margin-right: 15px;;opacity: 0.5'>";
      echo"      <h3>Vehicle Overview</h3>";
      echo"</div>";
  
      echo"<div style='background:rgb(255, 255, 255);border-radius: 0px;margin-left: 15px;margin-right: 15px;opacity: 0.5'>";
  
      echo"<div class='row' style='color:white'>";
      echo" <div class='col-md-6' >";
      echo"   <div style='box-sizing: border-box;margin:20px;background:black'>";
      echo"         <span class='h2'>Year:</span><span class='h2'> $year</span>";
      echo" </div>";
      echo" </div>";
      echo" <div class='col-md-6' >";
      echo"  <div style='box-sizing: border-box;margin:20px;background:black'>";
      echo"      <span class='h2'>Engine:</span><span class='h2'> $engine</span>";
      echo" </div>";
                          
      echo" </div>";
      echo"<div class='col-md-6'>";
      echo" <div style='box-sizing: border-box;margin:20px;background:black'>";
      echo"         <span class='h2'>Transmission:</span><span class='h2'> $transmission</span>";
      echo" </div>";
                          
      echo"</div>";
      echo"<div class='col-md-6'>";
      echo" <div style='box-sizing: border-box;margin:20px;background:black'>";
      echo"         <span class='h2'>Fuel:</span><span class='h2'> $fuel</span>";
      echo"  </div>";
                        
      echo"  </div>";
      echo"  <div class='col-md-6'>";
      echo"    <div style='box-sizing: border-box;margin:20px;background:black'>";
      echo"          <span class='h2'>Mileage:</span><span class='h2'> $mileage</span>";
      echo" </div>";
                         
      echo" </div>";
  
      echo"<div class='col-md-6'>";
      echo"  <div style='box-sizing: border-box;margin:20px;background:black;'>";
                              
      echo"         <span class='h2'>Colour:</span><span class='h2'> $color</span>";
      echo"  </div>";
      echo" </div>";
      echo" <div class='col-md-6'>";
      echo"    <div style='box-sizing: border-box;margin:20px;background:black;'>";
      echo"           <span class='h2'>MPG (Average):	</span><span class='h2'> $mpg</span>";
      echo"   </div>";
                              
      echo"  </div>";
      echo" <div class='col-md-6'>";
      echo"    <div style='box-sizing: border-box;margin:20px;background:black;'>";
      echo"         <span class='h2'>CO<sub>2</sub> Emissions: </span><span class='h2'> $emmisions</span>";
      echo" </div>";
                              
      echo" </div>";
      echo" <div class='col-md-6'>";
      echo"  <div style='box-sizing: border-box;margin:20px;background:black;'>";
  
      echo"          <span class='h2'>Doors: </span><span class='h2'> $doors</span>";
      echo" </div>";
                              
      echo" </div>";
      echo" <div class='col-md-6'>";
      echo" <div style='box-sizing: border-box;margin:20px;background:black;'>";
  
      echo"       <span class='h2'>Body Type: </span ><span class='h2'> $body</span>";
      echo" </div>";
                              
      echo" </div>";
  
      echo"</div>";
  
      echo"</div>";
      echo"</div>";
  
      echo"</div>";
      
           
        
    ?>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>