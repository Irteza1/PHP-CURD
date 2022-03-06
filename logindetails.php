<?php





$imgname=$_FILES["imageda"]["name"];
$folder="folder/".$imgname;
move_uploaded_file($imgname, $folder);

$con=new mysqli("localhost","root","","webapp");
$q="INSERT INTO `table1`(`fname`, `lname`, `email`, `password`, `image`) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."',' ".$_POST["email"]."','".$_POST["password"]."','".$folder."')";

$con->query($q);
header("location:login.php");
?>