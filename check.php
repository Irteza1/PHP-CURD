<?php
$email=$_POST["email"];
$pass=$_POST["password"];

$con=new mysqli("localhost","root","","webapp");
$q="select* from table1 where email = '".$email."' AND password='".$pass."'              ";
$result=$con->query($q);

$p=$result->fetch_assoc();

    if($con->query($q)==TRUE)
    {
        $row = mysqli_num_rows($result);
   
        if($row > 0)
     {
        
        session_start();
        $_SESSION["email"]=$email;
        $_SESSION["password"]=$pass;
        

        header("location:profile.php");
       }
    else
    {
        echo "wrong email and password";
    }

    }else{
        echo $con->error;
    
    }



?>