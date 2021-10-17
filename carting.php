<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '','myinfo');
    $username=$_SESSION["username"];
    $productid=$_SESSION["product"];
    $sql="INSERT INTO `cart`(`username`, `pid`) VALUES ('$username',$productid)";
    echo $sql;
    $result=mysqli_query($conn, $sql);
    if($result)
    {
        header ("location: info.php");
    }
?>