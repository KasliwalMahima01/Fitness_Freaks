<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>GYM Center</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent"> 
        <form>
          <input type="button" id="diet" class="fadeIn second" name="diet" value="Diet"  onclick="function2();">
          <input type="button" id="fees" class="fadeIn second" name="fees" value="Fees" onclick="function1()">
        </form>
      </div>
      <script type="text/javascript">
        function function1(){
          location.replace("fees.php  ")
        }
        function function2(){
          location.replace("AboutDiet.php")
          //return true;
        }
      </script>
    </div>
  </body>
</html>