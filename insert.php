<?php

$conn = mysqli_connect('localhost', 'root', '','myinfo');

if($conn)
{
    
    if($_POST['uname']!=null&&$_POST['email']!=null&&$_POST['password']!=null&&$_POST['Reppassword']!=null)
    {
        $u=$_POST['uname'];
        $e=$_POST['email'];
        $p=$_POST['password'];
        $rp=$_POST['Reppassword'];
        $check="select * from userinf where username='$u'";
        if($p==$rp)
        {
            $result=mysqli_query($conn, $check);
            $num=mysqli_num_rows($result);
            $namefail=0;
            $passwordfail=0;

            if($num==1)
            {
            $namefail=1;
            echo "alredy taken";
            header ("location: Registration.php");
            }
            else{
                $sql = "INSERT INTO userinf (username,email,password)
                VALUES ('$u','$e','$p')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                    mysqli_close($conn);
                    header ("location: loginform.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } 
            
            }
            
        }
    else{
        $passwordfail=1;
    }
    }
    

    
    
}
else{
    echo 'not ok';
}
?>

