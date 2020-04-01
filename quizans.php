<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Quiz Play</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=9a156ac8f2d852e01414ea12eef12c1c">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=9c94717a91f42f7cc20725c1ccaf19a9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title></title>
  </head>
  <body>
    <div class="Container">

    </div>
<div class="jumbotron">
  <h1>QUIZ TIME</h1>
  <?php

  $host = 'localhost';
  $user = 'root';
  $database = 'signup';
  $no = $_POST['no'];

  $con = mysqli_connect($host,$user,'',$database);
  if(!$con){
    echo "not working";
  }
  else {
  $sql = "SELECT * FROM quiz WHERE ID = '$no'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "Question: ". $row["question"]. "<br>Option 1: " . $row["optiona"]. "<br>Option 2: " . $row["optionb"]. "<br>Option 3: " . $row["optionc"]."<br>Option 4:"  . $row["optiond"];


      }
  } else {
      echo "0 results";
  }
  mysqli_close($con);
  }

   ?>
   <form class="jumbotron" action="quizans.php" method="post">

   </form>
   <label for="ans"></label>
   <input type="text" name="ans" >
   <input type="submit" name="submit" value="Submit">
   </form>
   <?php

   $host = 'localhost';
   $user = 'root';
   $database = 'signup';
   $no = $_POST['no'];

   $con = mysqli_connect($host,$user,'',$database);
   if(!$con){
     echo "not working";
   }
   else {
   $sql = "SELECT * FROM quiz WHERE ID = '$no'";
   $result = mysqli_query($con, $sql);

   if (mysqli_num_rows($result) > 0) {
       // output data of each row
       while($row = mysqli_fetch_assoc($result)) {
         $ans = $_POST["ans"];
         if($ans == $row["answer"]){
           echo "<br> RIGHT ANSWER!";
         }
         else {
           echo "<br> TRY AGAIN MATE!";
         }



       }
   } else {
       echo "0 results";
   }
   mysqli_close($con);
   }



    ?>

</div>
  </div>


  </body>
</html>
