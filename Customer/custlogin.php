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
		
		if(!empty($_POST['username']) && !empty($_POST['password']))
		{
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$query= mysqli_query($conn,"select * from customer where username = '$user' AND password ='$pass'");

			while($row=mysqli_fetch_assoc($query))  
			{  
				$db1username=$row['username'];  
				$dbpassword=$row['password'];  
				if($user == $db1username && $pass == $dbpassword)  
				{  
					header("Location: custafterlogin.php");
					session_start();
					$_SESSION['uname']=$db1username;
				}
			}  
		}else{
			$error="Invalid Username  or Password";
		}
	}
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Customer Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Sign In </h2>
        <!-- Login Form -->
        <form method="POST"  action ="">
          <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
        </form>

     

      </div>
    </div>
  </body>
</html>