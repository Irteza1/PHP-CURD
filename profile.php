<?php


session_start();
if (isset($_SESSION["email"])) {

	$name=$_SESSION["email"];
	$pass=$_SESSION["password"];
	   echo $name;
          echo $pass;

}else{
	echo "You're already loggged out";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>
  <!-- <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
   -->        <?php 
          echo $name;
          echo $pass;
         // $con=new mysqli("localhost","root","","webapp");
         // $q=("select * from `table1` where email='".$name."' AND password='".$pass."'");
         //   $data=$con->query($q);
         //   if($con->query($q)==TRUE){
         //   	$row=$data->fetch_assoc();
         //   	echo $row["fname"];
         //   	echo $row["lname"];
   
         //    }else
         //    {
         //          echo $con->error;
    
         //     }

          ?>
  <!--         <img src="" alt="">
          <div class="details">
            <span><?php echo $row["fname"]. " " . $row["lname"] ?></span>
          </div>
        </div>
        <a href="#" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
 -->
</body>
</html>
