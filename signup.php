<?php

$host = 'localhost';
$user = 'root';
$database = 'signup';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yy = $_POST['yy'];
$dob=$yy."-".$mm."--".$dd;
$timestamp = date('Y-m-d H:i:s');
$con = mysqli_connect($host,$user,'',$database);
if(!$con){
  echo "not working";
}
else {
  $q = "INSERT INTO user_info (name, email, password, gender, dob, times) Values ('$name', '$email','$password','$gender','$dob','$timestamp') ";
  mysqli_query($con,$q);
  echo "registration Successful!<br>";
  header( "refresh:5;url=index.php" );
  echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.';

}
 ?>
