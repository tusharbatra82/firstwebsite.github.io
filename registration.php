<?php

session_start();
header('location:target.php');
$con = mysqli_connect('localhost','root');
if($con){
  echo "connection successful";
}else {
  echo "no connection";
}

mysqli_select_db($con,'sessionpracticalii');

$name = $_POST['user'];
$pass = $_POST['Password'];

$q= "select * from signini where name='$name' && password='$pass'";
$result=mysqli_query($con , $q);
$num = mysqli_num_rows($result);
if($num == 1)
{
  echo "already registered";
}
else {
  $qy = "insert into signini(name, password) values ('$name','$pass')";
  mysqli_query($con,$qy);
}

 ?>
