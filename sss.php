<?php

session_start();
$conn=mysqli_connect("localhost","root","","gym_mgmt_system");
  if(!$conn){
    die("Connection Failed".mysqli_connect_errno());
  }else{
    //echo "Connection Successful";
  }
?>

<html>
    <body>
        <form method="post" id="ss" name="ss">
           <table border=2>
               <tr>
                 <th>Name</th>
                 <th>Username</th>
                 <th>Phone Number</th>
               </tr>
               
               
<?php

$sql="SELECT `name` , `username` ,`phoneno` FROM `customers` ";
$run=mysqli_query($conn,$sql);
   while($data=mysqli_fetch_array($run))
   {
?>
	  
          	    <tr>
              	 <td><h2><?php echo $data["name"];     ?></h2></td>
              	 <td><h2><?php echo $data["username"];  ?></h2></td>
                 <td><h2><?php echo $data["phoneno"];  ?></h2></td>
          	    </tr>

<?php
  }
?>                   
           </table>
        </form>
    </body>
</html>