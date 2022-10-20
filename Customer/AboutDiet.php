<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
<style>

</style>
</head>
<html>
<?php
$t11='';
$t12='';
$t13='';
$t14='';
$t15='';
$t16='';
$t17='';

$t21='';
$t22='';
$t23='';
$t24='';
$t25='';
$t26='';
$t27='';

if(isset($_POST['submit'])){
$bodytype=$_POST['bodytype'];
if ($bodytype=="thin") {
  $t11='Banana/Apple ';
  $t12='Banana/orange';
  $t13='Banana/papaya';
  $t14='Banana';
  $t15='Strawberries';
  $t16='mangoes';
  $t17='Banana/orange';

  $t21='broccoli';
  $t22='spinach';
  $t23='Bhindi Sabzi';
  $t24='eggplant';
  $t25='cauliflower';
  $t26='potatoes';
  $t27='peppers';

}
elseif ($bodytype=="medium") {
  $t11='banana';
  $t12='Apple';
  $t13='Orange';
  $t14='banana';
  $t15='watermelon';
  $t16='papaya';
  $t17='Apple';

  $t21='potatoes';
  $t22='Bhindi Sabzi';
  $t23='cauliflower';
  $t24='broccoli';
  $t25='spinach';
  $t26='broccoli';
  $t27='peppers';

}
elseif ($bodytype=="fat") {
  $t11='Apple';
  $t12='strawberries';
  $t13='mango';
  $t14='papaya';
  $t15='banana';
  $t16='grapes';
  $t17='Apple';

  $t21='cauliflower,';
  $t22='herbs';
  $t23='carrots';
  $t24='peppers';
  $t25='mix veg';
  $t26='eggplant';
  $t27='Bhindi Sabzi';

}
}
?>
  <head>
    <title>About Diet</title>
  <!--  <link rel="stylesheet" type="text/css" href="login.css"> -->
    <style type="text/css">
      html{
        background-color: #cf347c;
      }
      table{
        text-align: center;
        border-color: #b87a33;
        margin: 50px;
        border-radius: 15px;

      }
      #sss{
        background-color: #f7fcfc;
      }
	  #hello{
		  background-color: #8c8a74;
		  color : white;
		  height : 60px;
		  width : 600px; 
	  }


    </style>
  </head>
  <body>

       <center>
        <form method="post">
		<div id="hello">
				  <input type="radio" name="bodytype" value="thin">Thin &nbsp;
				  <input type="radio" name="bodytype" value="medium">Medium &nbsp;
				  <input type="radio" name="bodytype" value="fat">Fat &nbsp;
				  <input type="submit" name="submit" value="CHECK">
		</div>
				  

          <table border="" cellpadding="20px" cellspacing="5px">
            <tr id="sss">
              <td>Prefer/<br>When</td>
              <td>Sunday</td>
              <td>Monday</td>
              <td>Tuesday</td>
              <td>Wednusday</td>
              <td>Thursday</td>
              <td>Friday</td>
              <td>Saturday</td>
            </tr>
            <tr id="sss">
              <td>Fruits</td>
              <td><?php echo $t11 ?></td>
              <td><?php echo $t12 ?></td>
              <td><?php echo $t13 ?></td>
              <td><?php echo $t14 ?></td>
              <td><?php echo $t15 ?></td>
              <td><?php echo $t16 ?></td>
              <td><?php echo $t17 ?></td>
            </tr>
            <tr id="sss" >
              <td>Vegetables</td>
              <td><?php echo $t21 ?></td>
              <td><?php echo $t22 ?></td>
              <td><?php echo $t23 ?></td>
              <td><?php echo $t24 ?></td>
              <td><?php echo $t25 ?></td>
              <td><?php echo $t26 ?></td>
              <td><?php echo $t27 ?></td>
            </tr>
          </table>
        </form></center>
  </body>
</html>
<?php

 ?>
