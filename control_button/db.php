<?php

$SERVER ="localhost";
$username="root";
$password="";
$dbname="direction-control";

$conn=mysqli_connect($SERVER,$username,$password,$dbname);


 if(isset($_POST['Right']))
  {
    echo "<h1>R</h1>";
    $query = "INSERT INTO controlbtn (Right_R) VALUES ('R')";
    mysqli_query($conn, $query);
   
    
   
  }
  if(isset($_GET['Left']))
  {
     
    echo "<h1>L</h1>";
    $query = "INSERT INTO controlbtn (Left_L) VALUES ('L')";
    mysqli_query($conn, $query);
   
  }
  if(isset($_GET['Stop']))
  {
    echo "<h1>S</h1>";
    $query = "INSERT INTO controlbtn (Stop_S) VALUES ('S')";
    mysqli_query($conn, $query);
  

  }if(isset($_GET['Forward']))
  {
    
    $query = "INSERT INTO controlbtn (Forward_F) VALUES ('F')";
    mysqli_query($conn, $query);
    echo "F";

  }if(isset($_GET['Backwards']))
  {
    echo "<h1>B</h1>";
    $query = "INSERT INTO controlbtn (Backwards_B) VALUES ('B')";
    mysqli_query($conn, $query);
   
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>control</title>
  <link rel="stylesheet" href="css/Style.css"/>
  
 
</head>

<body>
<body>
    
</body>
</html>


