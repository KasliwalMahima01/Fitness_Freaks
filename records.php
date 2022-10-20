<?php
  $conn=mysqli_connect("localhost","root","","gym_mgmt_system");
  if(!$conn)
  {
    die("Connection Failed".mysqli_connect_errno());
  }else
  {
    //echo "Connection Successful";
  }

  if(isset($_POST['submit']))
  {
    
    if(!empty($_POST['name']) && !empty($_POST['phone']))
    {
      $user=$_POST['name'];
      $pass=$_POST['phone'];
      $query= mysqli_query($conn,"DELETE FROM `customer` WHERE `customer`.`name` = '$user' AND  `customer`.`phoneno` = '$pass'");

         if($conn->query($query)==TRUE){
         //echo "Record DELETED";
          }
          else{
          //    echo "Error";
           }  
    }else{
      $error="Invalid Username  or Password";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Delete Records</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
       
        <!-- Login Form -->
        <form method="POST"  action ="">
          <input type="text" id="name" class="fadeIn second" name="name" placeholder="name">
          <input type="text" id="phonre" class="fadeIn third" name="phone" placeholder="phone">
          <input type="submit" name="submit" class="fadeIn fourth" value="Delete" onclick="function1()">
        </form>
<script type="text/javascript">
  function function1(){
    alert("Successfully Deleted");
  }

</script>

      </div>
    </div>
  </body>
</html>