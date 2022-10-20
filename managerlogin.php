<?php
session_start();


if(isset($_POST['submit']))
	{
		session_destroy();
		header("Location: page1.html");
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Manager Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>

    <div class="wrapper fadeInDown">
      <div id="formContent"> 
        <form method="POST" action="">
          <input type="button" id="new" class="fadeIn second" name="new" value="New" onclick="myFunction()">
           <input type="button" id="show" class="fadeIn second" name="show" value="Show Records" onclick="myFunction3()">
          <input type="button" id="delete" class="fadeIn second" name="delete" value="Delete" onclick="myFunction2()">
          <input type="button" id="logout" class="fadeIn second" name="logout" value="Logout" onclick="myFunction4()">
        </form>
        <script>
          function myFunction() {
            location.replace("AddEntry.php")
          }
          
           function myFunction2() {
            location.replace("records.php")
          }
           function myFunction4() {
            location.replace("page1.php")
          }
          function myFunction3() {
            location.replace("showrecords.php")
          }
        </script>
      </div>
    </div>
  </body>
</html>