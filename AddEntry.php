<?php
session_start();
$conn=mysqli_connect("localhost","root","","gym_mgmt_system");
if (isset($_POST['submit1'])) {
	$name=$_POST['name'];
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	$age=$_POST['age'];
	$weight=$_POST['weight'];
	$profession=$_POST['profession'];
	$fees=$_POST['fees'];
	$address=$_POST['address'];
	$phoneno=$_POST['phone'];

 $sql_query="INSERT INTO customer VALUES('','$name','$uname','$pass','$weight','$age','$profession','$fees','$address','$phoneno')";
	echo $query= mysqli_query($conn,$sql_query);
		
}else{
	echo "Invalid Click";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Add Customer</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent"> 
        <form method="POST" name="entrydata" id="entrydata" action="">
            <table>
              <tr>
                <td>Name</td>
                <td><input type="text" id="name" class="fadeIn second" name="name" placeholder="name"></td>
              </tr>
               <tr>
                <td>Username</td>
                <td><input type="text" id="username" class="fadeIn second" name="username" placeholder="username"></td>
              </tr>
               <tr>
                <td>Password</td>
                <td><input type="password" id="password" class="fadeIn second" name="password" placeholder="password"></td>
              </tr>
              <tr>
                <td>Age</td>
                <td><input type="text" id="age" class="fadeIn second" name="age" placeholder="age"></td>
              </tr>
              <tr>
                <td>Weight</td>
                <td><input type="text" id="weight" class="fadeIn second" name="weight" placeholder="weight"></td>
              </tr>
              <tr>
                <td>Profession</td>
                <td><input type="text" id="profession" class="fadeIn second" name="profession" placeholder="profession"></td>
              </tr>
              <tr>
                <td>Fees</td>
                <td><input type="text" id="fees" class="fadeIn second" name="fees" placeholder="fees"></td>
              </tr>
              <tr>
                <td>Address</td>
                <td><input type="text" id="address" class="fadeIn second" name="address" placeholder="address"></td>
              </tr>
              <tr>
                <td>Phone Number</td>
                <td><input type="text" id="phone" class="fadeIn second" name="phone" placeholder="phone number"></td>
              </tr>
              <tr>
                <td colspan="2" ><input type="submit" id="submit1" class="fadeIn second" name="submit1" value="Save"></td>
              </tr>
            </table></form>
      </div>
    </div>
  </body>
</html>