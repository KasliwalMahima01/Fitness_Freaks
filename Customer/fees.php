<?php

  session_start();

  $conn=mysqli_connect("localhost","root","","gym_mgmt_system");
  if(!$conn)
  {
    die("Connection Failed".mysqli_connect_errno());
  }else
  {
    //echo "Connection Successful";
  }
  $name=$_SESSION['uname'];
  $query= "SELECT `fees` FROM `customer` WHERE `username` = '$name'"; 
  if(($min=$conn->query($query))==TRUE){
    $min1=mysqli_fetch_array($min);
    $fees=$min1['fees'];
      
  }
  else{
    echo "Error";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Fees Description</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent"> 
        <form>
          
         <h2 style="color: black">Paid</h2>: <input type="text" id="fees" class="fadeIn second" name="fees" value="<?php  echo $fees?>" disabled="">
        </form>
      </div>
    </div>
  </body>
</html>