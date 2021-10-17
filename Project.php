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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body  >
        
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="Cars/slide1.jpg" class="d-block w-100 img-responsive" alt="..." >

              <div class="carousel-caption d-none d-md-block">


                <H1 class="animated fadeInUp display-4" style="animation-delay: 1s">Best Car Repair And Maintenance Service</H1>
                <h2 class="animated fadeInDown" style="animation-delay: 2s">Best Site for Car Buy and sell</h2>

              </div>
          </div>
          <div class="carousel-item">
            <img src="Cars/slide4.jpg" class="d-block w-100 img-responsive" alt="..." >
            <div class="carousel-caption d-none d-md-block">


                    <H1 class="animated fadeInLeft display-4" style="animation-delay: 1s">Best Car Repair And Maintenance Service</H1>
                    <h2 class="animated fadeInRight" style="animation-delay: 2s">Best Site for Car Buy and sell</h2>
    
                  </div>
          </div>
          <div class="carousel-item">
            <img src="Cars/slide5.png" class="d-block w-100 img-responsive" alt="..." >
            <div class="carousel-caption d-none d-md-block">


                    <H1 class="animated flipInX display-4" style="animation-delay: 1s">Best Car Repair And Maintenance Service</H1>
                    <h2 class="animated flipInY" style="animation-delay: 2s">Best Site for Car Buy and sell</h2>
    
                </div>
          </div>
        </div>

        <div>
            <a href="#carouselExampleSlidesOnly" class="carousel-control-prev" role="button" data-slide="prev">

                <span class="carousel-control-prev-icon">
                </span>
                <span class="sr-only">
                    Previous
                    </span>
            </a>
            <a href="#carouselExampleSlidesOnly" class="carousel-control-next" role="button" data-slide="prev">

                    <span class="carousel-control-next-icon">
                    </span>
                    <span class="sr-only">
                        Next
                        </span>
            </a>
        </div>
      </div>
    
    <div class="middle" >

        <p class="display-4 top" style="text-align: center;font-weight: bold;color: white">CAR TYPES</p>
        <br>
        <br>

        <div class="row">
                
               
               <?php

                        $sql="SELECT * FROM `product` limit 9";
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
                                                

                                        
                                        echo"<div class=' col-md-4 ' style='height:450px;box-sizing: border-box;text-align: center;'>";
                                        echo"<div class='card ' style='width: 80%;margin:auto'>";
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
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
