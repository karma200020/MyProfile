<?php
$host = 'localhost';
$user = 'root';
$database = 'signup';
$q = $_POST['question'];
$a = $_POST['optiona'];
$b = $_POST['optionb'];
$c = $_POST['optionc'];
$d = $_POST['optiond'];
$answer = $_POST['answer'];

echo $c;
echo $d;
echo $answer;

$con = mysqli_connect($host,$user,'',$database);
if(!$con){
  echo "not working";
}
else {
  $q = "INSERT INTO quiz (question, optiona, optionb, optionc,optiond,answer) Values ('$q', '$a','$b','$c','$d',$answer) ";
  mysqli_query($con,$q);
  echo "Submission Successful!<br>";
  header( "refresh:5;url=index.php" );
  echo 'You\'ll be redirected in about 5 secs. If not, click <a href="index.php">here</a>.';

}








 ?>
