<?php
        include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ul, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet'>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="item.css">
    <title>Document</title>
</head>
<body style="background:grey">
<br><br><br>
<div class="container-fluid;padding:50px;text-align:center" >
         
        <div class="row" style="margin:0%">
                <?php
                        $sql="select * from product";
                        $conn = mysqli_connect('localhost', 'root', '','myinfo');
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                                while($row = mysqli_fetch_assoc($result)) {
                                        $pid=$row["pid"];
                                        $link=$row["link"];
                                        $pname=$row["pname"];
                                        $mileage=$row['mileage'];
                                        $fuel=$row['fuel'];
                                        $engine=$row['engine'];
                                        $color=$row['color'];
                                        echo"<div class=' col-md-4 ' style='height:450px;box-sizing: border-box;padding:0%;text-align: center;'>";
                                                echo"<div class='card ' style='width: 28rem;margin:auto'>";
                                                echo"<img class='card-img-top animated zoomIn' style='animation-delay: 2s background:  no-repeat;height: 200px;background-size:cover;background-position: center '  src='$link' alt='Card image cap'>";
                                                echo" <div class='card-body'>";
                                                echo" <h5 class='card-title'>$pname</h5>";
                                                echo" <p class='card-text'> <span>$mileage</span>  <span>$fuel</span>  <span>$engine</span> <span>$color</span></p>";
                                                echo" <a href='info.php?id=$pid' class='btn btn-primary'>Click here</a>";
                                                echo"</div>";
                                                echo"</div>";
                                        echo"</div>";
                                }
                        }
                        else {
                                echo "0 results";
                        }
                ?>
        </div>
</div>
        <?php
             include 'footer.php';
        ?>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


