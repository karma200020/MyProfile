<?php

$host = 'localhost';
$user = 'root';
$database = 'signup';
$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query'];
$phone = $_POST['phone'];

$con = mysqli_connect($host,$user,'',$database);
if(!$con){
  echo "not working <br>";
  header( "refresh:5;url=index.php" );
  echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.'
}
else {
  $q = "INSERT INTO contact (name, email, phone, query) Values ('$name', '$email','$phone','$query') ";
  mysqli_query($con,$q);
  echo "registration Successful!<br>";
  header( "refresh:5;url=index.php" );
  echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.';

}
 ?>
